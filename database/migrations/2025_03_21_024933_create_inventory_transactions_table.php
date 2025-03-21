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
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->enum('transaction_type', ['incoming', 'outgoing']);
            $table->integer('quantity');
            $table->string('reference_id', 50)->nullable();
            $table->string('supplier_info', 255)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->index('product_id', 'idx_transaction_product');
            $table->index('created_at', 'idx_transaction_date');
            $table->index('transaction_type', 'idx_transaction_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_transactions');
    }
};
