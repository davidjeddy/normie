<?php
/**
 * Strings normalization functions
 *
 * @category helper functions
 * @package  Normie
 * @author   David J Eddy <me@davidjeddy.com>
 * @license  MIT
 * @link     https://github.com/davidjeddy/normie
 */

/**
 * @param  array $array
 * @param  mixed $key
 * @return bool
 */
function norm_array_key_exists(array $array, $key): bool
{
    return array_key_exists($key, $array);
}

/**
 * @param array $array1
 * @param callable $callback
 * @param array $userdata
 * @return array
 */
function norm_array_map(array $array1, callable $callback, array $userdata): array
{
    return array_map($callback, $array1, $userdata);
}

/**
 * @param array $array1
 * @param mixed $needle
 * @param bool $strict
 * @return false|int|string
 */
function norm_array_search(array $array1, $needle, bool $strict = FALSE)
{
    return array_search($needle, $array1, $strict);
}

/**
 * @param array $array1
 * @param mixed $needle
 * @param bool $strict
 * @return bool
 */
function norm_in_array(array $array1, $needle, bool $strict = FALSE): bool
{
     return in_array($needle, $array1, $strict);
}
