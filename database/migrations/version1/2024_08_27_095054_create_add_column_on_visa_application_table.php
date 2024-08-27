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
        Schema::table('visa_applications', function (Blueprint $table) {
            $table->integer('paid_service_plan_id')->nullable();
            $table->integer('application_type')->nullable()->default(1)->comment("1 => Visa Application 2 =>paid service application");
            $table->integer('visa_type_id')->change()->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visa_applications', function (Blueprint $table) {
            $table->dropColumn('paid_service_plan_id');
            $table->dropColumn('application_type');
        });
    }
};
