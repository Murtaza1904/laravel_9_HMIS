<?php

namespace App\View\Components\Atoms;

use App\Models\MaritalStatus;
use Illuminate\View\Component;


class Select extends Component
{
    public $selectName;
    public $collection;
    // public $item;

    public function __construct($selectName) 
    {
        $this->selectName = $selectName;
        $this->collection = MaritalStatus::orderBy('name')->get();
        // $this->item = $item;
    }


    public function render()
    {
        return view('components.atoms.select');
    }
}
