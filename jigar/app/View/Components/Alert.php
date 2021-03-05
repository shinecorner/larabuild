<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Services\AlertCreator;

class Alert extends Component
{

    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $message;
    public $creator;
/

}
    public function __construct(AlertCreator $type,$message,$creator)
    {
        $this->type = $type;
        $this->message = $message;
        $this->creator = $creator;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
