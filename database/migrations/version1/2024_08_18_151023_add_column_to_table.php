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
        Schema::table('schengen_personal_informations', function (Blueprint $table) {
            $table->integer('allocated')->nullable();
            $table->integer('assignor')->nullable();
        });

        Schema::table('usa_personal_informations', function (Blueprint $table) {
            $table->integer('allocated')->nullable();
            $table->integer('assignor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schengen_personal_informations', function (Blueprint $table) {
            $table->dropColumn('allocated');
            $table->dropColumn('assignor');
        });

        Schema::table('usa_personal_informations', function (Blueprint $table) {
            $table->dropColumn('allocated');
            $table->dropColumn('assignor');
        });
    }
};
