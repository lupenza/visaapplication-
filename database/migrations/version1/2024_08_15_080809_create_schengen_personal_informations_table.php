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
        Schema::create('schengen_personal_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('applicant_id');
            $table->string('maritial_status')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->string('current_nationality')->nullable();
            $table->string('nin')->nullable();
            $table->string('home_address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('other_residence')->nullable();
            $table->string('residence_number')->nullable();
            $table->date('residence_valid')->nullable();
            $table->date('purpose_of_journey')->nullable();
            $table->integer('application_stage')->comment("0=> pending , 1 => OnProgress , 2 => Accepted , 3 => Rejected")->default(0);
            $table->uuid();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schengen_personal_informations');
    }
};
