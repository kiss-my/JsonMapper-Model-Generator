<?php

/*
 * This file is part of JSON Mapper Model Generator.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
    public function vendor(): string
    {
        return $this->properties->get('namespace');
    }

    /**
     * @return mixed
     */
    public function className(): string
    {
        return $this->properties->get('className');
    }

    /**
     * @return mixed
     */
    public function properties(): array
    {
        return $this->properties->get('properties');
    }
}
