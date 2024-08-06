<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\IntakeFormMail;
use App\Models\Intake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class IntakeController extends Controller
{
    public function intakeForm()
    {
        return view('front.intake-form');
    }

    public function template()
    {
        return view('email.email-template');
    }

    public function test()
    {
        $intake = Intake::query()->first();
        Mail::to('kh9ulugbek@gmail.com')->send(new IntakeFormMail($intake, 'vWWgjpoIUYWWRDkunwn7iDTJdNqrmA2UO89p38wCsbgFOuuH5Q'));
    }
}
