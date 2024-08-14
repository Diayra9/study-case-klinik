<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->integer('age');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('phone_number');
            $table->string('status')->nullable();
            $table->unsignedBigInteger('treatment_id');
            $table->string('doctor')->nullable();
            $table->string('location');
            $table->timestamps();

            $table->foreign('treatment_id')
                ->references('id')
                ->on('treatments')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
