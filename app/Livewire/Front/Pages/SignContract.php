<?php

namespace App\Livewire\Front\Pages;

use App\Models\Intake;
use Livewire\Component;

class SignContract extends Component
{
    public $step = 1;
    public $signatureImage;
    public $emptySignatureImage;
    protected $listeners = [
        'setSignatureImage' => 'setSignatureImage',
        'setEmptySignatureImage' => 'setEmptySignatureImage',
        'nextStep' => 'nextStep',
    ];

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function render()
    {
        $intake = Intake::query()->where('token', request()->get('token'))->first();
        return view('livewire..front.pages.sign-contract');
    }

    public function nextStep()
    {
        if ($this->step == 1) {
            if ($this->signatureImage == $this->emptySignatureImage) {
                session()->flash('sign', 'Before submitting please sign');
            } else {
                $this->step ++ ;
            }
        }

    }

    public function setSignatureImage($value)
    {
        $this->signatureImage = $value;
    }

    public function setEmptySignatureImage($value)
    {
        $this->emptySignatureImage = $value;
    }
}
