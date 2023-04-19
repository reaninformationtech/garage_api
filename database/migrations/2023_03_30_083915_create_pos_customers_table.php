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
        Schema::create('pos_customers', function (Blueprint $table) {
            $table->string('cus_code');
            $table->string('branch_code');
            $table->string('cus_name')->nullable();
            $table->string('cus_type')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('remark')->nullable();
            $table->boolean('active')->nullable();
            $table->string('inputter',250)->nullable();

            $table->softDeletes();
            $table->timestamps();
            $table->primary(array('cus_code', 'branch_code'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos_customers');
    }
};
