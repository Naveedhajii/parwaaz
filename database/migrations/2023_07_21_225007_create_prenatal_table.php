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
        Schema::create('prenatals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jk_id');
            $table->date('prenatal_session_date');
            $table->string('parwaaz_coordinator');
            $table->string('facilitator_names');
            $table->string('mother_name');
            $table->string('cnic_number');
            $table->string('mobile_number');
            $table->string('guardian_name');
            $table->string('guardian_relation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prenatals');
    }
};
