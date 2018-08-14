<?php
namespace davidjeddy\Normie;

class Strings
{
    public static function stristr($needle, $haystack, $before_needle = FALSE) {
        return \stristr($haystack, $needle, $before_needle);
    }
}
