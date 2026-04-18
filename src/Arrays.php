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
 * @param  array    $array
 * @param  callable $callback
 * @param  array    $userdata
 * @return array
 */
function norm_array_map(array $array, callable $callback, array $userdata): array
{
    return array_map($callback, $array, $userdata);
}

/**
 * @param  array $array
 * @param  mixed $needle
 * @param  bool  $strict
 * @return int|string|false|null
 */
function norm_array_search(array $array, $needle, bool $strict = false)
{
    return array_search($needle, $array, $strict);
}

/**
 * @param  array $array
 * @param  mixed $needle
 * @param  bool  $strict
 * @return bool
 */
function norm_in_array(array $array, $needle, bool $strict = false): bool
{
    return in_array($needle, $array, $strict);
}
