<?php


declare(strict_types=1);

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
     * @var
     */
    private $overrides;

    /**
     * Generator constructor.
     *
     * @param $namespace
     * @param $class
     * @param $data
     * @param array $overrides
     */
    public function __construct(string $namespace, string $class, array $data, array $overrides = [])
    {
        $this->namespace = $namespace;
        $this->class = $class;
        $this->data = $data;
        $this->overrides = $overrides;
    }

    /**
     * @return string
     */
    public function output(): string
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
    protected function compile($stub, $data): string
    {
        return (new \Mustache_Engine())->render(
            file_get_contents(__DIR__.'/stubs/Model.stub'), new Context($data)
        );
    }
}
