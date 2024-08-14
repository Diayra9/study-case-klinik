<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_phone');
            $table->string('email')->unique();
            $table->date('birthday');
            $table->enum('gender', ['Male', 'Female']);
            $table->text('address');
            $table->boolean('valid_status')->default(true);
            $table->integer('point')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
