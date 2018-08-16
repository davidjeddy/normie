<?php
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
 * Swapping $pieces and $glue positions
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
