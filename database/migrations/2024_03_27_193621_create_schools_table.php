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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('specialty_date');
            $table->string('specialty_subject');
            $table->string('currently_work');
            $table->string('graduated_faculty');
            $table->string('graduation_year');
            $table->string('first_school');
            $table->string('second_school');
            $table->string('congress_registration');
            $table->string('institutional_permission');
            $table->string('certificate_proficiency');
            $table->string('european_board');
            $table->string('previously_school');
            $table->string('complete_school');
            $table->string('telephone');
            $table->string('email');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
