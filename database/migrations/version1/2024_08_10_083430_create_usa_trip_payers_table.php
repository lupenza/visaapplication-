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
        Schema::create('usa_trip_payers', function (Blueprint $table) {
            $table->id();
            $table->integer('personal_information_id');
            $table->string('payer_name')->nullable();
            $table->string('payer_phone_number')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('payer_relationship')->nullable();
            $table->boolean('address_equality')->nullable();
            $table->string('payer_street_address')->nullable();
            $table->string('payer_city')->nullable();
            $table->string('payer_state')->nullable();
            $table->string('payer_postal_code')->nullable();
            $table->string('payer_country')->nullable();
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
        Schema::dropIfExists('usa_trip_payers');
    }
};
