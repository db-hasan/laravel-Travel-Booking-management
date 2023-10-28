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
        Schema::create('bundles', function (Blueprint $table) {
            $table->bigIncrements('bundle_id');
            $table->string('bundle_name',50)->nullable();
            $table->integer('bundel_percentage',2)->nullable();
            $table->string('room_type',255)->nullable();
            $table->string('bundle_des',255)->nullable();
            $table->string('bundle_img',255)->nullable();
            $table->integer('bundle_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bundles');
    }
};
