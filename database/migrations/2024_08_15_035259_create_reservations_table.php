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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->date('date');
            $table->integer('age', 4);
            $table->integer('gender', 2);
            $table->string('phone_number', 15);
            $table->integer('status', 4)->nullable();
            $table->integer('treatment_id')->nullable();
            $table->integer('doctor', 1);
            $table->integer('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
