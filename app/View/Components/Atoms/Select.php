<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;


class Select extends Component
{
    public $selectName;
    // public $collection;
    // public $item;

    public function __construct($selectName) 
    {
        $this->selectName = $selectName;
        // $this->collection = $collection;
        // $this->item = $item;
    }


    public function render()
    {
        return view('components.atoms.select');
    }
}
