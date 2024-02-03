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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('domesticCompany');
            $table->string('position');
            $table->integer('title');
            $table->string('phoneNumber')->nullable();
            $table->string('mobilePhone');
            $table->string('email');
            $table->text('address')->nullable();
            $table->string('university')->nullable();
            $table->string('dateOfGraduation')->nullable();
            $table->string('expertiseTestDate')->nullable();
            $table->string('specializedInstitution')->nullable();
            $table->string('medicalSpecialty')->nullable();
            $table->string('KBBQualificationCertificate')->nullable();
            $table->string('associationNo')->nullable();
            $table->string('personCV')->nullable();
            $table->string('workingArea')->nullable();
            $table->string('detailedProject')->nullable();
            $table->string('currentLanguage')->nullable();
            $table->string('englishForeign')->nullable();
            $table->string('foreignLanguage1')->nullable();
            $table->string('foreignLanguage2')->nullable();
            $table->string('foreignLanguage3')->nullable();
            $table->string('foreignLanguage4')->nullable();
            $table->string('otherScholarship')->nullable();
            $table->string('referenceLetter1')->nullable();
            $table->string('referenceLetter2')->nullable();
            $table->string('referenceLetter3')->nullable();
            $table->string('referenceLetter4')->nullable();
            $table->string('candidateEducation')->nullable();
            $table->string('institutionLetter')->nullable();
            $table->string('educationStartDate')->nullable();
            $table->string('educationCompletionDate')->nullable();
            $table->string('scholarshipDuration')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
