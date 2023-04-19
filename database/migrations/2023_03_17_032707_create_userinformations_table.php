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
        Schema::create('userinformations', function (Blueprint $table) {
            $table->string('branch_code',10);
            $table->string('fullname',250)->nullable();
            $table->string('gender',250)->nullable();
            $table->string('phone',250)->nullable();
            $table->string('province',250)->nullable();
            $table->string('district',250)->nullable();
            $table->string('communes',250)->nullable();
            $table->string('village',250)->nullable();
            $table->string('sysdoc',100)->nullable();
            $table->timestamps();

            $table->primary('sysdoc','branch_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userinformations');
    }
};
