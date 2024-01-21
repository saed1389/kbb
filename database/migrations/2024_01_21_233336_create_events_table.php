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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en')->nullable();
            $table->string('event_place')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('event_href')->nullable();
            $table->tinyInteger('new_page')->default(0);
            $table->longText('event_body');
            $table->longText('event_body_en');
            $table->tinyInteger('event_category');
            $table->tinyInteger('show_website')->default(0);
            $table->tinyInteger('OnPermission')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->bigInteger('order');
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
