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

class TypeGetter
{
    /**
     * @param $data
     *
     * @return string
     */
    public static function get($data): string
    {
        if (is_object($data)) {
            $type = get_class($data);

            if ($type === 'stdClass') {
                $type = 'object';
            } else {
                $type = '\\'.$type;
            }
        } else {
            $type = static::isDateTime($data) ? '\DateTime' : gettype($data);
        }

        return $type;
    }

    /**
     * @param $data
     *
     * @return bool
     */
    private static function isDateTime($data): bool
    {
        if (!is_string($data)) {
            return false;
        }

        return (bool) \DateTime::createFromFormat('Y-m-d G:i:s', $data);
    }
}
