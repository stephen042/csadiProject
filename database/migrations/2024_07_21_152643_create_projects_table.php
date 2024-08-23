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
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->foreignId('user_id')->constrained();
            $table->string('heading');
            $table->string('facebook_link')->nullable();
            $table->string('starting_date');
            $table->string('ending_date')->nullable();
            $table->string('location');
            $table->string('placeholder_image');
            $table->string('funded_by');
            $table->string('target_beneficiaries');
            $table->longText('description');
            $table->json('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
