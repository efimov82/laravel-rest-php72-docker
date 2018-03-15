<?php

namespace App\Enums;

// Working for php 7+
use BenSampo\Enum\Enum;

/**
 * @SWG\Definition(type="string", @SWG\Xml(name="VideoStatus"))
 *
 * @SWG\Property(property="value", description="Encoding status",  enum="['New', 'Available', 'Encoding', 'Unavailable', 'Unknown', 'Deleted']")
 *
 */
class VideoStatus // extends Enum
{
    const ST_UNKNOWN        = 0;
    const ST_NEw            = 1;
    const ST_ENCODING       = 2;
    const ST_AVAILABLE      = 3;
    const ST_UNAVAILABLE    = 4;
    const ST_DELETED        = 5;

    protected static $keys = [
        self::ST_UNKNOWN        => 'unknown',
        self::ST_NEw            => 'new',
        self::ST_ENCODING       => 'encoding',
        self::ST_AVAILABLE      => 'available',
        self::ST_UNAVAILABLE    => 'unavailable',
        self::ST_DELETED        => 'deleted',
    ];

    /**
     * @param  int  $value
     * @return string
     */
    //public static function getDescription(int $value): string
    public static function getDescription($value)
    {
        if (isset(self::$keys[$value])) {
            return ucwords(self::$keys[$value]);
        } else {
            return ucwords(self::$keys[self::ST_UNKNOWN]);
        }
    }

    /**
     * Get enum key by value
     *
     * @param string $value
     * @return int
     */
    public static function getValue($value)
    {
        $values = array_flip(self::$keys);
        $key = strtolower($value);

        if (isset($values[$key])) {
            return $values[$key];
        } else {
            return self::ST_UNKNOWN;
        }
    }
}
