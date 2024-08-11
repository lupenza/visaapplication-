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
        Schema::create('usa_family_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('personal_information_id');
            $table->string('father_surname')->nullable();
            $table->string('father_given_name')->nullable();
            $table->date('father_dob')->nullable();
            $table->boolean('is_father_in_us')->nullable();
            $table->string('mother_surname')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_dob')->nullable();
            $table->boolean('is_mother_in_us')->nullable();
            $table->boolean('other_imemediate_relative_in_us')->nullable();
            $table->boolean('other_relative_in_us')->nullable();
            $table->string('spouse_name')->nullable();
            $table->date('spouse_dob')->nullable();
            $table->string('spouse_nationality')->nullable();
            $table->string('spouse_city')->nullable();
            $table->string('spouse_origin')->nullable();
            $table->string('spouse_address')->nullable();
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
        Schema::dropIfExists('usa_family_informations');
    }
};
