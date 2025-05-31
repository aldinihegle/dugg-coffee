<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Image extends Component
{
    public $src;
    public $alt;
    public $width;
    public $height;
    public $class;
    public $rounded;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src, $alt = '', $width = null, $height = null, $class = '', $rounded = false)
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->width = $width;
        $this->height = $height;
        $this->class = $class;
        $this->rounded = $rounded;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image');
    }
} 