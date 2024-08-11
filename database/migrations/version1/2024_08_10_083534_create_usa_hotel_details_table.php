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
        Schema::create('usa_hotel_details', function (Blueprint $table) {
            $table->id();
            $table->integer('personal_information_id');
            $table->string('us_contact_person')->nullable();
            $table->string('us_contact_address')->nullable();
            $table->string('us_contact_organization')->nullable();
            $table->string('us_contact_relationship')->nullable();
            $table->string('us_contact_phone')->nullable();
            $table->string('us_contact_email')->nullable();
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
        Schema::dropIfExists('usa_hotel_details');
    }
};
