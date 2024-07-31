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
        Schema::create('intakes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('social_security_number');
            $table->string('married');
            $table->string('gender');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('email');
            $table->string('phone');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_number');
            $table->string('address_of_accident');
            $table->date('date_of_accident');
            $table->string('state_of_accident');
            $table->string('approximate_damage_to_the_vehicle');
            $table->string('who_injured');
            $table->string('insurance_company');
            $table->string('policy_number');
            $table->string('working_status');
            $table->string('treatment');
            $table->string('therapy');
            $table->string('hospital');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intakes');
    }
};
