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
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('pack_id');
            $table->string('pack_location',20)->nullable();
            $table->string('pack_des',255)->nullable();
            $table->string('resort',255)->nullable();
            $table->string('pack_price',10)->nullable();
            $table->string('from_date',10)->nullable();
            $table->string('to_date',10)->nullable();
            $table->string('arrival_time',10)->nullable();
            $table->integer('pack_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
