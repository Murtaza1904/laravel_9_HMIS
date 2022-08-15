<?php

namespace App\Http\Livewire\Components\Atoms;

use Livewire\Component;

class Select extends Component
{
    public $selectName;
    // public $collection;
    // public $item;

    // public function mount(
    //     $selectName,
    //     // $collection, $item
    // ) {
    //     $this->selectName = $selectName;
    //     // $this->collection = $collection;
    //     // $this->item = $item;
    // }


    public function render()
    {
        return view('livewire.components.atoms.select');
    }
}
