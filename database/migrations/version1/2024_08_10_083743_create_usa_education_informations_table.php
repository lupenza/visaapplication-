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
        Schema::create('usa_education_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('personal_information_id');
            $table->string('primary_occupation')->nullable();
            $table->string('present_employer')->nullable();
            $table->string('employer_duties')->nullable();
            $table->string('employer_phone_number')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->boolean('previously_employed')->nullable();
            $table->text('duties')->nullable();
            $table->string('college_name')->nullable();
            $table->string('college_address')->nullable();
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
        Schema::dropIfExists('usa_education_informations');
    }
};
