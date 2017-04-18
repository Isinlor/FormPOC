<?php

namespace Isinlor\Form\Model;

/**
 * Class Task
 *
 * @package Isinlor\Form\Model
 */
class Task
{

    /**
     * @var string
     */
    protected $label;

    /**
     * Task constructor.
     *
     * @param string $label
     */
    public function __construct($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

}