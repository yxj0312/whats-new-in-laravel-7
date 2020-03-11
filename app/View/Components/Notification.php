<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Notification extends Component
{
    public $description;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($description, $type)
    {
        //
        $this->description = $description;
        $this->type = $type;
    }

    public function isSelected()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // return 'check it out';
        return view('components.notification');
    }
}
