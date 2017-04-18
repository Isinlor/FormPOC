<?php

namespace Isinlor\Form\Form\Utility;

use Isinlor\Form\Form\Attributes as AttributesCollection;

/**
 * Class Attributes
 *
 * @package Isinlor\Form\Form\Utility
 */
trait Attributes
{

    /**
     * @var AttributesCollection
     */
    protected $attributes = [];

    /**
     * @return AttributesCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

}