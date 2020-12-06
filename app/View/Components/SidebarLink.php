<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarLink extends Component
{
    public $href,$svg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href,$svg)
    {
        $this->href=$href;
        $this->svg=$svg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar-link');
    }
}
