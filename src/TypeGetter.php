<?php

namespace BrianFaust\JsonMapper;

class TypeGetter
{
    /**
     * @param $data
     *
     * @return string
     */
    public static function get($data)
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
    private static function isDateTime($data)
    {
        if (!is_string($data)) {
            return false;
        }

        return (bool) \DateTime::createFromFormat('Y-m-d G:i:s', $data);
    }
}
