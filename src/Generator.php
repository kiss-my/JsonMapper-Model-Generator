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

class Generator
{
    /**
     * @var
     */
    private $namespace;
    /**
     * @var
     */
    private $class;
    /**
     * @var
     */
    private $data;

    /**
     * Generator constructor.
     *
     * @param $namespace
     * @param $class
     * @param $data
     * @param array $overrides
     */
    public function __construct($namespace, $class, $data, $overrides = [])
    {
        $this->namespace = $namespace;
        $this->class = $class;
        $this->data = $data;
        $this->overrides = $overrides;
    }

    /**
     * @return string
     */
    public function output()
    {
        $result = [];

        foreach ($this->data as $key => $value) {
            $result['properties'][] = [
                'name' => $key,
                'type' => TypeGetter::get($value),
            ];
        }

        $result['namespace'] = $this->namespace;
        $result['className'] = $this->class;

        $result['properties'] = array_merge($result['properties'], $this->overrides);

        return $this->compile('Model.stub', $result);
    }

    /**
     * @param $stub
     * @param $data
     *
     * @return string
     */
    protected function compile($stub, $data)
    {
        return (new \Mustache_Engine())->render(
            file_get_contents(__DIR__.'/stubs/Model.stub'), new Context($data)
        );
    }
}
