<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroup extends Component
{
    public $label;
    public $name;
    public $type;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $type, $value)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form-group');
    }
}
