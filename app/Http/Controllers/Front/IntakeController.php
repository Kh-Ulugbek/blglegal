<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    public function intakeForm()
    {
        return view('front.intake-form');
    }
}
