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
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->bigInteger("class_id")->primary();
            $table->bigInteger("owner_id")->required();
            $table->string("class_name")->required();
            $table->enum('status', ['public', 'private','lock'])->default('public')->required();
            $table->string("invite_class")->required();
            $table->string("key_code");
            $table->timestamps();
            $table->foreign('owner_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_rooms');
    }
};
