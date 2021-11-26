<?php

namespace Dictionaries;

use Illuminate\Support\Arr;

abstract class Dictionary
{
    /**
     * @return array
     */
    abstract public static function getDictionary(): array;

    /**
     * @param string|int $value
     * @param mixed|null $default
     * @return mixed
     */
    public static function getValueData($value, $default = null)
    {
        return Arr::get(static::getDictionary(), $value, $default);
    }

    /**
     * @return array
     */
    public static function getRange(): array
    {
        return array_keys(static::getDictionary());
    }

    public static function getStringRange(): string
    {
        return implode(',', static::getRange());
    }
}
