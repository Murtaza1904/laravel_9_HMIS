<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $placeholder;

    // public function mount($type, $name, $placeholder)
    // {
    //     $this->type = $type;
    //     $this->name = $name;
    //     $this->placeholder = $placeholder;
    // }


    public function render()
    {
        return view('livewire.components.atoms.input');
    }
}
