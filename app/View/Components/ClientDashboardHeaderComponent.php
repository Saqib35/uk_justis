<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ClientDashboardHeaderComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $page_name;
    public function __construct($pagename=null)
    {
        //
        $this->page_name=$pagename;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.client-dashboard-header-component');
    }
}
