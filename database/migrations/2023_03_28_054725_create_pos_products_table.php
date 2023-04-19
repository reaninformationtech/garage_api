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
        Schema::create('pos_products', function (Blueprint $table) {
            $table->string('pro_code');
            $table->string('branch_code');
            $table->string('pro_name')->nullable();
            $table->string('barcode')->nullable();
            $table->decimal('cost', 12, 3)->nullable();
            $table->decimal('unitprice', 12, 3)->nullable();
            $table->decimal('discount', 12, 3)->nullable();
            $table->decimal('disamount', 12, 3)->nullable();
            $table->decimal('qty_alert', 12, 3)->nullable();
            $table->string('lin_code')->nullable();
            $table->string('remark')->nullable();
            $table->boolean('active')->nullable();
            $table->string('qrcode')->nullable();
            $table->string('url')->nullable();
            $table->string('inputter',255)->nullable();
            
            $table->softDeletes();
            $table->timestamps();
            $table->primary('pro_code','branch_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos_products');
    }
};
