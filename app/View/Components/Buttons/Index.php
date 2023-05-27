<?php

namespace App\View\Components\Buttons;

use App\Actions\Tailwind\GetButtonColorsAction;
use Illuminate\View\Component;

class Index extends Component
{
    public $color;
    public $type;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'dark', $type = 'submit', $title = 'Salvar')
    {
        $this->color = $this->getColor($color);
        $this->type = $type;
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
        return view('components.buttons.index');
    }
}
