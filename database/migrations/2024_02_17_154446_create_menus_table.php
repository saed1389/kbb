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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('href')->nullable();
            $table->longText('content')->nullable();
            $table->tinyInteger('blank')->default(0);
            $table->tinyInteger('show')->default(1);
            $table->tinyInteger('permission')->default(1);
            $table->integer('hit')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
