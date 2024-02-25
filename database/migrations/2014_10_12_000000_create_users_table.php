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
            $table->id();

            // $table->string('user_name');
            // $table->string('email')->unique()->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password')->nullable();
            // $table->date('birth_date')->nullable();
            // $table->string('nationaility')->nullable();
            // $table->string('gender');
            // $table->string('status')->nullable();
            // $table->type('type');

            $table->rememberToken();
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
