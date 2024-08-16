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
        Schema::create('payment_logs', function (Blueprint $table) {
            $table->id();
            $table->float('amount');
            $table->string('external_id');
            $table->string('vendor_id');
            $table->json('personal_id');
            $table->json('visa_type');
            $table->integer('applicant')->nullable();
            $table->integer('status')->comment('0 => Pending 1 => Paid 2 => sent 3 =>rejected')->default(0);
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
        Schema::dropIfExists('payment_logs');
    }
};
