<?php

namespace App\View\Components\Links;

use App\Actions\Tailwind\GetButtonColorsAction;
use Illuminate\View\Component;

class Index extends Component
{
    public $icon;
    public string $color;
    public string $title;
    public string $href;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'violet', $href = '#', $title = 'Ir para', $icon = null)
    {
        $this->icon = $icon;
        $this->href = $href;
        $this->color = $this->getColor($color);
        $this->title = $title;
    }

    protected function getColor($color)
    {
        return GetButtonColorsAction::execute($color);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.links.index');
    }
}
