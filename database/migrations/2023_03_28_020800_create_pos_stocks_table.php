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
        Schema::create('pos_stocks', function (Blueprint $table) {
            $table->string('stc_code');
            $table->string('branch_code');
            $table->string('stc_name')->nullable();
            $table->string('comments')->nullable();
            $table->boolean('active')->nullable();
            $table->string('inputter',255)->nullable();
            
            $table->softDeletes();
            $table->timestamps();
            $table->primary('stc_code','branch_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos_stocks');
    }
};
