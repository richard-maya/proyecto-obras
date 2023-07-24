<?php

namespace App\View\Components\Dash;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableTitle extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $rutaVer,
        public string $rutaCrear
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dash.table-title');
    }
}
