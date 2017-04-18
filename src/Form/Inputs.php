<?php

namespace Isinlor\Form\Form;

use Isinlor\Form\Form\Utility\Collection;

/**
 * Class Inputs
 *
 * @package Isinlor\Form\Form
 */
class Inputs
{

    use Collection;
    
    /**
     * Inputs constructor.
     *
     * @param Input[] $elements
     */
    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

}