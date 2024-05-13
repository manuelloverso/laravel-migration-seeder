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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30)->nullable();
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time', 2)->unsigned();
            $table->time('arrival_time',  2)->unsigned();
            $table->string('train_code', 10)->unique()->nullable();
            $table->tinyInteger('carriages_number')->nullable();
            $table->boolean('is_on_time')->default(1)->nullable();
            $table->boolean('is_canceled')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
