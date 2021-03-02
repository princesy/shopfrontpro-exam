<?php

namespace Helpers;

class Sanitize
{
    public static function int($var)
    {
        return filter_var($var, FILTER_SANITIZE_NUMBER_INT);
    }
}
