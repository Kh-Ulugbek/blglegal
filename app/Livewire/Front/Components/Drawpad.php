<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;

class Drawpad extends Component
{
    public $canvasId;
    public $canvasWidth;
    public $canvasHeight;
    public $cor;

    public function render()
    {
        return view('livewire..front.components.drawpad', [
            'canvasWidth' => $this->canvasWidth,
            'canvasHeight' => $this->canvasHeight,
        ]);
    }
}
