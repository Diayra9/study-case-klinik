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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->notNull();
            $table->string('name', 255)->notNull();
            $table->text('description')->nullable();
            $table->decimal('selling_price', 10, 0)->nullable();
            $table->decimal('stock', 10, 0)->nullable();
            $table->text('image')->nullable();
            $table->integer('show_status', 1)->notNull();
            $table->integer('bpom_status', 1)->notNull();
            $table->integer('halal_status', 1)->notNull();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};