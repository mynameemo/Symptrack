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
         Schema::create('user_symptoms', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('symptom_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('severity')->default(5);
            $table->date('logged_at');
            $table->unique(['user_id', 'symptom_id', 'logged_at']);
            $table->timestamps();

            // Foreign keys
            $table->foreign('symptom_id')->references('id')->on('symptoms')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_symptoms');
    }
};
