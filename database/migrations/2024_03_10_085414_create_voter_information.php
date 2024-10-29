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
        Schema::create('voter_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('added_by');
            // $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('taluka_id');
            $table->unsignedBigInteger('village_id');
            // $table->unsignedBigInteger('adhar_card_number');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            // $table->string('gram_panchayat_name');
            $table->string('mobile_number');
            $table->string('voter_id');
            $table->string('ward_no');
            $table->unsignedBigInteger('cast');
            $table->string('other_cast_name');
            $table->unsignedBigInteger('gender');
            $table->string('date_of_birth');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voter_information');
    }
};
