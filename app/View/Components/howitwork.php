<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class howitwork extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|View
     */
    public function render()
    {
        return view('components.howitwork');
    }
}
