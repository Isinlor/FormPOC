<?php

namespace Isinlor\Form\Form;

use Isinlor\Form\Form\Utility\Collection;

/**
 * Class Attributes
 *
 * @package Isinlor\Form\Form
 */
class Attributes
{

    use Collection;

    /**
     * Attributes constructor.
     *
     * @param string[] $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->elements = $attributes;
    }

}