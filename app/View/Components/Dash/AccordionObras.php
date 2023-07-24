<?php

namespace App\View\Components\Dash;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AccordionObras extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $acordeon,
        public string $nombreObra,
        public string $numeroObra,
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dash.accordion-obras');
    }
}
