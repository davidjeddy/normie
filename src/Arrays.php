<?php
/**
 * @param  array $array
 * @param  mixed $key
 * @return bool
 */
function norm_array_key_exists(array $array, $key)
{
    return array_key_exists($key, $array);
}
