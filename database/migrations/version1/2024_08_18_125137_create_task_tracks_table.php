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
        Schema::create('task_tracks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('resource_id');
            $table->integer('resource_type');
            $table->integer('status')->default(0)->comment("0 => Pending, 1 => Attended , 2 => Rejected");
            $table->text('comment')->nullable();
            $table->date('received_date')->nullable();
            $table->date('forward_date')->nullable();
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
        Schema::dropIfExists('task_tracks');
    }
};
