<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained();
            $table->integer('quantity');
            $table->decimal('unit_price', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->enum('return_status', ['not_returned', 'return_requested', 'returned', 'return_rejected'])->default('not_returned');
            $table->text('return_reason')->nullable();
            $table->timestamps();
            
            $table->index('order_id', 'idx_orderitem_order');
            $table->index('product_id', 'idx_orderitem_product');
            $table->index('return_status', 'idx_orderitem_return');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
