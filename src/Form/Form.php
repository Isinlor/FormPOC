<?php

namespace Isinlor\Form\Form;

use Isinlor\Form\Form\Attributes as AttributesCollection;
use Isinlor\Form\Form\Inputs as InputsCollection;
use Isinlor\Form\Form\Utility\Attributes;
use Isinlor\Form\Form\Utility\Inputs;

/**
 * Class Form
 *
 * @package Isinlor\Form\Form
 */
class Form
{

    use Attributes;
    use Inputs;

    /**
     * Form constructor.
     *
     * @param AttributesCollection $attributes
     * @param InputsCollection     $inputs
     */
    public function __construct(AttributesCollection $attributes, InputsCollection $inputs)
    {
        $this->attributes = $attributes;
        $this->inputs = $inputs;
    }

}