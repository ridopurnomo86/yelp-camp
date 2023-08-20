<?php

namespace App\View\Components\cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CampCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $description;
    public $image;
    public $path;

    public function __construct($title, $description, $image, $path)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.camp-card');
    }
}
