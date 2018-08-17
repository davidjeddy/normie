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
function norm_array_key_exists(array $array, $key)
{
    return array_key_exists($key, $array);
}
