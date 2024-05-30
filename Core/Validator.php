<?php
namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = 255)
    {
        $string = trim($value);

        return strlen($string) >= $min && strlen($string) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
