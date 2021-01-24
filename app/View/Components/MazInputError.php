<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MazInputError extends Component
{
    public $for;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for)
    {
        $this->for = $for;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.maz-input-error');
    }
}
