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
        Schema::create('pos_transactions', function (Blueprint $table) {
            $table->string('sysdoc');
            $table->string('branch_code');
            $table->string('pro_code')->nullable();
            $table->string('barcode')->nullable();
            $table->string('sto_code')->nullable();
            $table->decimal('qty', 12, 3)->nullable();
            $table->decimal('total_qty', 12, 3)->nullable();
            $table->string('trancode')->nullable();
            $table->string('tranref')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('pos_transactions');
    }
};
