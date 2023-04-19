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
        Schema::create('pos_product_lines', function (Blueprint $table) {
            $table->string('lin_code');
            $table->string('branch_code');
            $table->string('lin_name')->nullable();
            $table->string('remark')->nullable();
            $table->boolean('active')->nullable();
            $table->string('inputter',250)->nullable();
            $table->softDeletes();
            $table->timestamps();
            
            $table->primary('lin_code','branch_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos_product_lines');
    }
};
