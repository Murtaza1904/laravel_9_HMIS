<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;

class Tab extends Component
{
    public $tab_name;
    public $selected;
    public $class;

    // public function mount($tab_name, $selected, $class)
    // {
    //     $this->tab_name = $tab_name;
    //     $this->selected = $selected;
    //     $this->class = $class;
    // }


    public function render()
    {
        return view('livewire.components.atoms.tab');
    }
}
