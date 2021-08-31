<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $styles = null;

    public function __construct($title = null)
    {
        // Using Operator Ternary
        // $this->title = $title ? $title : "Pages";

        $this->title = $title ?? "Pages";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
