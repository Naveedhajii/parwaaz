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
        Schema::create('facilitators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('jk_id');
            $table->string('nic');
            $table->string('num');
            $table->string('email');
            $table->string('qualification');
            $table->string('profession');
            $table->date('dob');
            $table->date('training_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilitators');
    }
};
