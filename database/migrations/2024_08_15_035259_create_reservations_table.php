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
            $table->string('name', 255)->notNull();
            $table->date('date')->notNull();
            $table->integer('age', 4)->notNull();
            $table->integer('gender', 2)->notNull();
            $table->string('phone_number', 15)->notNull();
            $table->integer('status', 4)->nullable();
            $table->integer('treatment_id')->nullable();
            $table->integer('doctor', 1)->notNull();
            $table->integer('location')->notNull();
            $table->integer('payment_status')->nullable();
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
