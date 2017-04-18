<?php

namespace Isinlor\Form\Form\Utility;

use Isinlor\Form\Form\Input;
use Isinlor\Form\Form\Inputs as InputsCollection;

/**
 * Class Inputs
 *
 * @package Isinlor\Form\Form\Utility
 */
trait Inputs
{

    /**
     * @var InputsCollection|Input[]
     */
    protected $inputs;

    /**
     * @return InputsCollection|Input[]
     */
    public function getInputs()
    {
        return $this->inputs;
    }

}