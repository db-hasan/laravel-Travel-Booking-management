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
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('expense_id');
            $table->string('order_id',10)->nullable(); 
            $table->string('expense_location',20)->nullable(); 
            $table->string('expense_type',255)->nullable();
            $table->string('expense_price',10)->nullable();
            $table->integer('expense_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
