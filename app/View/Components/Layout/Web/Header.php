<?php

namespace App\View\Components\Layout\Web;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
   public $url;
    public function __construct($url = null)
    {
        if($url) throw new Exception("Component memerlukan Item Header");
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.web.header');
    }
}
