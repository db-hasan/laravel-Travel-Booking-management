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
        Schema::create('cruds', function (Blueprint $table) {
            $table->bigIncrements('crud_id');
            $table->string('crud_name',20)->nullable();
            $table->string('crud_des',255)->nullable();
            $table->string('resort',255)->nullable();
            $table->string('crud_price',10)->nullable();
            $table->integer('crud_status')->default(1);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cruds');
    }
};
