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
        Schema::create('cars', function (Blueprint $table) {
    $table->id();
    $table->string('title'); // Car title or model
    $table->text('description')->nullable();
    $table->decimal('price', 10, 2);
    $table->string('brand')->nullable(); // e.g., Toyota, BMW
    $table->string('model')->nullable();
    $table->year('year')->nullable();
    $table->integer('mileage')->nullable(); // in km
    $table->string('fuel_type')->nullable(); // Petrol, Diesel, etc.
    $table->string('transmission')->nullable(); // Manual, Auto
    $table->string('location')->nullable();
    $table->boolean('is_sold')->default(false);
    $table->unsignedBigInteger('user_id'); // posted by
    $table->timestamps();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
