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
        Schema::create('torlaks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en')->nullable();
            $table->string('slug');
            $table->string('slug_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->tinyInteger('type');
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('OnPermission');
            $table->integer('created_by');
            $table->bigInteger('hit')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torlaks');
    }
};
