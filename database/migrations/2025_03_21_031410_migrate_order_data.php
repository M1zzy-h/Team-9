<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('orders', 'total_amount')) {
            Schema::table('orders', function ($table) {
                $table->decimal('total_amount', 10, 2)->after('address')->default(0);
            });
        }

        $orders = DB::table('orders')->get();
        
        foreach ($orders as $order) {
            
            if (!isset($order->total_amount) || $order->total_amount == 0) {
                $totalAmount = $order->price * $order->product_quantity;
                DB::table('orders')
                    ->where('id', $order->id)
                    ->update(['total_amount' => $totalAmount]);
            }
            
           
            if (Schema::hasTable('order_items')) {
                $existingItem = DB::table('order_items')
                    ->where('order_id', $order->id)
                    ->first();
                
                if (!$existingItem) {
                    DB::table('order_items')->insert([
                        'order_id' => $order->id,
                        'product_id' => $order->product_id,
                        'quantity' => $order->product_quantity,
                        'unit_price' => $order->price,
                        'subtotal' => $order->price * $order->product_quantity,
                        'return_status' => 'not_returned',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
   
};