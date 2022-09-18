<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Lesson;

class accordion extends Component
{
    public $lessons;
    public $addDate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lessons = new Lesson(), $addDate = 0)
    {
        $this->lessons = $lessons;
        $this->addDate = $addDate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.accordion');
    }
}
