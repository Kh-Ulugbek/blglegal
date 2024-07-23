<?php

namespace App\Livewire\Front\Pages;

use Livewire\Component;

class IntakeForm extends Component
{
    public function render()
    {
        return view('livewire..front.pages.intake-form');
    }

    public function test()
    {
        dd(123123);
    }
}
