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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->text('short_description')->nullable();
            $table->text('short_description_en')->nullable();
            $table->string('news_href')->nullable();
            $table->tinyInteger('new_page')->default(0);
            $table->integer('gallery')->nullable();
            $table->longText('news_body');
            $table->longText('news_body_en');
            $table->tinyInteger('placeId');
            $table->tinyInteger('news_category');
            $table->tinyInteger('slider')->default(0);
            $table->tinyInteger('OnPermission')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->bigInteger('hit')->default(0);
            $table->string('image');
            $table->integer('created_by');
            $table->bigInteger('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
