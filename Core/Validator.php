<?php
namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = 200)
    {
        $string = trim($value);

        return strlen($string) >= $min && strlen($string) <= $max;
    }
}
