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
        Schema::create('class_room_users', function (Blueprint $table) {
            $table->bigInteger('class_id');
            $table->bigInteger('user_id');
            $table->enum('roles', ['admin', 'manajer', 'user'])->default('user');
            $table->timestamps();
            $table->foreign('class_id')->references('class_id')->on('class_rooms')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_room_users');
    }
};
