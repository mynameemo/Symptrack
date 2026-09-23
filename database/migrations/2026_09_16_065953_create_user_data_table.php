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
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('user_name');

            $table->string('symptom_name');

            $table->dateTime('logged_at');

            $table->unsignedTinyInteger('severity');

            $table->unsignedInteger('duration_value');

            $table->string('duration_unit');

            $table->string('trigger_name');

            $table->string('medication_name')->nullable();

            $table->string('medication_dosage')->nullable();

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
