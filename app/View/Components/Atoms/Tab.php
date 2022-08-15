<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;


class Tab extends Component
{
    public $tab_name;
    public $selected;
    public $class;

    public function __construct($tab_name, $selected, $class)
    {
        $this->tab_name = $tab_name;
        $this->selected = $selected;
        $this->class = $class;
    }


    public function render()
    {
        return view('components.atoms.tab');
    }
}
