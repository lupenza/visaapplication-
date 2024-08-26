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
        Schema::create('paid_service_form', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->integer('paid_service_id');
            $table->integer('paid_service_price_id');
            $table->boolean('rule')->default(true);
            $table->string('input_type');
            $table->text('options')->nullable();
            $table->integer('arrangement');
            $table->integer('created_by');
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
        Schema::dropIfExists('paid_service_form');
    }
};
