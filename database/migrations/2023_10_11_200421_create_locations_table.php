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
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('loc_id');
            $table->string('loc_name',20)->nullable();
            $table->string('loc_des',255)->nullable();
            $table->string('resort',255)->nullable();
            $table->string('booking_price',10)->nullable();
            $table->integer('loc_status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
