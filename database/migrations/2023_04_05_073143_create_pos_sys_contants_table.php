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
        Schema::create('pos_sys_contants', function (Blueprint $table) {
            $table->string('con_name');
            $table->string('branch_code');
            $table->string('con_values')->nullable();
            $table->string('con_comments')->nullable();

            $table->softDeletes();
            $table->timestamps();
            $table->primary(array('con_name', 'branch_code'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos_sys_contants');
    }
};
