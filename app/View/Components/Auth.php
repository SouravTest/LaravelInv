<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Auth extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // if (session()->has('user')) {

        // } else {
        //     return redirect('login');
        // }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth');
    }
}