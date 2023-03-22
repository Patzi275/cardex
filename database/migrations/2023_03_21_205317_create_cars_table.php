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
            $table->string('model');
            $table->string('brand');
            $table->integer('make_year');
            $table->integer('passenger_capacity', unsigned: true);
            $table->decimal('kilometers_per_liter', unsigned: true);
            $table->enum('fuel_type', ['diesel', 'hybride', 'essence', 'électrique']);
            $table->enum('transmission_type', ['Automatique', 'Manuel']);
            $table->decimal('daily_rate');
            $table->boolean('available')->default(false);
            $table->timestamps();
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
