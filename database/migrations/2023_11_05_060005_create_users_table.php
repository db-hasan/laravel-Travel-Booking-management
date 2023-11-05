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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('user_name',50)->nullable();
            $table->string('user_email',50)->nullable();
            $table->string('user_phone',50)->nullable();
            $table->string('username',50)->nullable();
            $table->string('password',50)->nullable();
            $table->integer('user_role')->default(4);
            $table->string('user_img',255)->nullable();
            $table->integer('user_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
