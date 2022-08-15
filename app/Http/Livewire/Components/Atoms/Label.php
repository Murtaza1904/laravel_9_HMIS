<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;

class Label extends Component
{
    public $label;

    // public function mount($label)
    // {
    //     $this->label = $label;
    // }


    public function render()
    {
        return view('livewire.components.atoms.label');
    }
}
