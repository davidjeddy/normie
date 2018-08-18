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
 * Swapping $delimiter and $string positions
 *
 * @param  string $string
 * @param  string $delimiter
 * @param  int    $limit
 * @return array<int, string>|false
 */
function norm_explode(string $string, string $delimiter, $limit = PHP_INT_MAX)
{
    return explode($delimiter, $string, $limit);
}

/**
 * Swapping $glue and $pieces positions
 *
 * @param  array  $pieces
 * @param  string $glue
 * @return string
 */
function norm_implode(array $pieces, string $glue): string
{
    return implode($glue, $pieces);
}

/**
 * Swapping $glue and $pieces positions
 *
 * @param  string $glue
 * @param  array  $pieces
 * @return string
 */
function norm_join(array $pieces, string $glue): string
{
    return implode($glue, $pieces);
}

/**
 * @param  mixed   $subject
 * @param  mixed   $search
 * @param  mixed   $replace
 * @param  integer $count
 * @return mixed
 */
function norm_str_replace($subject, $search, $replace, $count = 1)
{
    return str_replace($search, $replace, $subject, $count);
}

/**
 * Added return value.
 *
 * @param  string $string
 * @param  array  $result
 * @return array
 */
function norm_parse_str(string $string, array &$result): array
{
    parse_str($string, $result);

    return $result;
}
