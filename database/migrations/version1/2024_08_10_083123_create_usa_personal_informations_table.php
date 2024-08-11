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
        Schema::create('usa_personal_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('applicant_id');
            $table->string('maritial_status')->nullable();
            $table->boolean('passport_held')->nullable();
            $table->boolean('permanent_residence')->nullable();
            $table->string('home_country')->nullable();
            $table->string('home_city')->nullable();
            $table->string('home_street')->nullable();
            $table->string('primary_email')->nullable();
            $table->string('primary_phone_number')->nullable();
            $table->boolean('stolen_passport')->nullable();
            $table->string('purpose_of_trip')->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->string('arrival_city')->nullable();
            $table->string('street')->nullable();
            $table->string('postal_code')->nullable();
            $table->boolean('insurance')->nullable();
            $table->string('insurance_name')->nullable();
            $table->text('passport')->nullable();
            $table->boolean('other_people_travel')->nullable();
            $table->boolean('have_been_us')->nullable();
            $table->boolean('have_you_own_us_visa')->nullable();
            $table->boolean('refused_us_visa')->nullable();
            $table->boolean('clan')->nullable();
            $table->json('languages')->nullable();
            $table->json('visited_city')->nullable();
            $table->json('specialized_skill')->nullable();
            $table->boolean('social_contribution')->nullable();
            $table->boolean('served_military')->nullable();
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
        Schema::dropIfExists('usa_personal_informations');
    }
};
