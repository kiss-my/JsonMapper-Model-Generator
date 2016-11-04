<?php

namespace BrianFaust\JsonMapper;

use Illuminate\Support\Collection;

class Context
{
    /**
     * Context constructor.
     *
     * @param $properties
     */
    public function __construct($properties)
    {
        $this->properties = new Collection($properties);
    }

    /**
     * @return mixed
     */
    public function vendor()
    {
        return $this->properties->get('namespace');
    }

    /**
     * @return mixed
     */
    public function className()
    {
        return $this->properties->get('className');
    }

    /**
     * @return mixed
     */
    public function properties()
    {
        return $this->properties->get('properties');
    }
}
