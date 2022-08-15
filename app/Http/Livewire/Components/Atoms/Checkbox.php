<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;

class Checkbox extends Component
{
    public $checkbox_name;

    // public function mount($checkbox_name)
    // {
    //     $this->checkbox_name = $checkbox_name;
    // }


    public function render()
    {
        return view('livewire.components.atoms.checkbox');
    }
}
