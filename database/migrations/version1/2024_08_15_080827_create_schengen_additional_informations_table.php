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
        Schema::create('schengen_additional_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('schengen_personal_information_id');
            $table->string('travel_document')->nullable();
            $table->string('no_of_travel_document')->nullable();
            $table->date('date_issue')->nullable();
            $table->date('validity')->nullable();
            $table->string('issued_by')->nullable();
            $table->string('current_occupation')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('member_state')->nullable();
            $table->string('member_state_entry')->nullable();
            $table->string('entry_requested')->nullable();
            $table->string('duration')->nullable();
            $table->string('visa_issue_before')->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->string('fingerprint')->nullable();
            $table->date('collection_date')->nullable();
            $table->string('permit_issuer')->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->text('inviting_person')->nullable();
            $table->text('inviting_person_address')->nullable();
            $table->text('inviting_company')->nullable();
            $table->text('inviting_company_address')->nullable();
            $table->text('company_personel')->nullable();
            $table->string('cost_of_travel')->nullable();
            $table->string('family_surname')->nullable();
            $table->string('family_firstname')->nullable();
            $table->date('family_dob')->nullable();
            $table->string('family_nationality')->nullable();
            $table->string('family_nin')->nullable();
            $table->string('family_relationship')->nullable();
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
        Schema::dropIfExists('schengen_additional_informations');
    }
};
