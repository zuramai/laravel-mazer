<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MazAlert extends Component
{
    public $on;
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($on, $color)
    {
        $this->on = $on;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.maz-alert');
    }
}
