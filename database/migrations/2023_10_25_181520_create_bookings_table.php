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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('book_location',50)->nullable();
            $table->string('bundle_name',50)->nullable();
            $table->string('person',50)->nullable();
            $table->string('promo',50)->nullable();
            $table->string('name',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('gender',50)->nullable();
            $table->string('birth',50)->nullable();
            $table->string('occupation',50)->nullable();
            $table->string('nationality',50)->nullable();
            $table->string('nid',50)->nullable();
            $table->string('address',255)->nullable();
            $table->string('city',50)->nullable();
            $table->string('zip',50)->nullable();
            $table->string('payment',50)->nullable();
            $table->integer('book_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
