<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Intake extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable= [
        'first_name',
        'last_name',
        'date_of_birth',
        'social_security_number',
        'married',
        'gender',
        'street_address',
        'city',
        'state',
        'zip_code',
        'email',
        'phone',
        'emergency_contact_name',
        'emergency_contact_number',
        'address_of_accident',
        'date_of_accident',
        'state_of_accident',
        'approximate_damage_to_the_vehicle',
        'who_injured',
        'insurance_company',
        'policy_number',
        'working_status',
        'treatment',
        'therapy',
        'hospital',
    ];
}
