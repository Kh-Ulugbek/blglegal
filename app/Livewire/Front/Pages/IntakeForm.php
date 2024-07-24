<?php

namespace App\Livewire\Front\Pages;

use App\Models\Assistance;
use App\Models\Injure;
use App\Models\Intake;
use App\Models\IntakeAssistance;
use App\Models\IntakeInjure;
use Livewire\Component;

class IntakeForm extends Component
{
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $social_security_number;
    public $married;
    public $gender;
    public $street_address;
    public $city;
    public $state;
    public $zip_code;
    public $email;
    public $phone;
    public $emergency_contact_name;
    public $emergency_contact_number;
    public $address_of_accident;
    public $date_of_accident;
    public $state_of_accident;
    public $approximate_damage_to_the_vehicle;
    public $who_injured;
    public $insurance_company;
    public $policy_number;
    public $working_status;
    public $treatment;
    public $therapy;
    public $hospital;
    public $public_assistance = [];
    public $injuries = [];

    public function render()
    {
        $injures = Injure::query()->get()->toArray();
        $assistances = Assistance::query()->get();
        return view('livewire..front.pages.intake-form', compact('injures', 'assistances'));
    }

    public function submit()
    {
        $this->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'social_security_number' => 'required',
                'married' => 'required',
                'gender' => 'required',
                'street_address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip_code' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'emergency_contact_name' => 'required',
                'emergency_contact_number' => 'required',
                'address_of_accident' => 'required',
                'date_of_accident' => 'required',
                'state_of_accident' => 'required',
                'approximate_damage_to_the_vehicle' => 'required',
                'who_injured' => 'required',
                'insurance_company' => 'required',
                'policy_number' => 'required',
                'working_status' => 'required',
                'treatment' => 'required',
                'therapy' => 'required',
                'hospital' => 'required'
            ]
        );

        $intake = Intake::query()->create(
            [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'date_of_birth' => $this->date_of_birth,
                'social_security_number' => $this->social_security_number,
                'married' => $this->married,
                'gender' => $this->gender,
                'street_address' => $this->street_address,
                'city' => $this->city,
                'state' => $this->state,
                'zip_code' => $this->zip_code,
                'email' => $this->email,
                'phone' => $this->phone,
                'emergency_contact_name' => $this->emergency_contact_name,
                'emergency_contact_number' => $this->emergency_contact_number,
                'address_of_accident' => $this->address_of_accident,
                'date_of_accident' => $this->date_of_accident,
                'state_of_accident' => $this->state_of_accident,
                'approximate_damage_to_the_vehicle' => $this->approximate_damage_to_the_vehicle,
                'who_injured' => $this->who_injured,
                'insurance_company' => $this->insurance_company,
                'policy_number' => $this->policy_number,
                'working_status' => $this->working_status,
                'treatment' => $this->treatment,
                'therapy' => $this->therapy,
                'hospital' => $this->hospital
            ]
        );

        foreach ($this->injuries as $key=>$item) {
            IntakeInjure::query()->create(
                [
                    'intake_id' => $intake->id,
                    'injure_id' => $item,
                ]
            );
        }

        foreach ($this->public_assistance as $key=>$item) {
            IntakeAssistance::query()->create(
                [
                    'intake_id' => $intake->id,
                    'assistance_id' => $item,
                ]
            );
        }

        $this->redirect('/');
    }
}
