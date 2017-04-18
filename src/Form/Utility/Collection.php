<?php

namespace Isinlor\Form\Form\Utility;

/**
 * Class Collection
 *
 * @package Isinlor\Form\Form\Utility
 */
trait Collection
{

    /**
     * @var array
     */
    protected $elements = [];

    /**
     * @param callable $f
     *
     * @return array
     */
    public function map(callable $f)
    {
        return array_map($f, $this->elements);
    }

    /**
     * @param callable $f
     *
     * @return array
     */
    public function filter(callable $f)
    {
        return array_filter($this->elements, $f);
    }

    /**
     * @param callable $f
     *
     * @return mixed
     */
    public function reduce(callable $f)
    {
        return array_reduce($this->elements, $f);
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->elements);
    }

}