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
        Schema::create('paid_service_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('paid_service_id');
            $table->string('name');
            $table->string('price')->nullable();
            $table->text('offers')->nullable();
            $table->integer('created_by');
            $table->uuid();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paid_service_prices');
    }
};
