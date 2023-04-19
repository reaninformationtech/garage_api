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
        Schema::create('pos_una_purchase_order_details', function (Blueprint $table) {
            $table->string('sysdoc');
            $table->string('pur_code');
            $table->string('branch_code');
            $table->string('pro_code')->nullable();
            $table->string('barcode')->nullable();
            $table->string('sto_code')->nullable();
            $table->decimal('cost', 12, 3)->nullable();
            $table->decimal('unitprice', 12, 3)->nullable();
            $table->decimal('discount', 12, 3)->nullable();
            $table->decimal('disamount', 12, 3)->nullable();
            $table->decimal('qty', 12, 3)->nullable();
            $table->decimal('amount', 12, 3)->nullable();
            $table->decimal('currency', 12, 3)->nullable();
            $table->decimal('exchange', 12, 3)->nullable();
            $table->string('invoice')->nullable();
            $table->string('remark')->nullable();
            $table->string('inputter',250)->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->primary(array('sysdoc', 'branch_code'));

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos_una_purchase_order_details');
    }
};
