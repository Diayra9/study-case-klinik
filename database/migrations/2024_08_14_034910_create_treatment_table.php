<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    public function up()
    {
        Schema::create('treatment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('selling_price');
            $table->text('description');
            $table->string('image')->nullable();
            $table->boolean('show_status')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('treatments');
    }
}
