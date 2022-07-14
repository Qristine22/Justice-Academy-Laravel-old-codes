<?php

namespace App\View\Components\About\GoverningBoard;

use Illuminate\View\Component;

class Members extends Component
{
    public $item;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.about.governing-board.members');
    }
}
