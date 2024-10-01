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
        Schema::create('membership', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->notNull();
            $table->string('no_phone', 15)->notNull();
            $table->string('email', 255)->notNull();
            $table->date('birthday')->notNull();
            $table->integer('gender', 2)->notNull();
            $table->text('address')->nullable();
            $table->integer('valid_status', 1)->nullable();
            $table->decimal('point', 10, 0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership');
    }
};
