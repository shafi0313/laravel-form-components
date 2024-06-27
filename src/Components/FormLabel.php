<?php

namespace shafi0313\LaravelFormComponents\Components;

class FormLabel extends Component
{
    public string $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label = '')
    {
        $this->label = $label;
    }
}
