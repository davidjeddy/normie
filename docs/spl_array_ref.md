# Array function reference

array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )

array array_chunk           ( array $array , int $size [, bool $preserve_keys = FALSE ] )

array array_column          ( array $input , mixed $column_key [, mixed $index_key = NULL ] )

array array_combine         ( array $keys , array $values )

array array_count_values    ( array $array )

array array_diff_assoc      ( array $array1 , array $array2 [, array $... ] )

array array_diff_key        ( array $array1 , array $array2 [, array $... ] )

array array_diff_uassoc     ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

array array_diff_ukey       ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

array array_diff            ( array $array1 , array $array2 [, array $... ] )

array array_fill_keys       ( array $keys , mixed $value )

array array_fill            ( int $start_index , int $num , mixed $value )

array array_filter          ( array $array [, callable $callback [, int $flag = 0 ]] )

array array_flip            ( array $array )

array array_intersect_assoc ( array $array1 , array $array2 [, array $... ] )

array array_intersect_key   ( array $array1 , array $array2 [, array $... ] )

array array_intersect_ua... ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

array array_intersect_ukey  ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

array array_intersect       ( array $array1 , array $array2 [, array $... ] )

bool array_key_exists       ( mixed $key , array $array )

mixed array_key_first       ( array $array )

mixed array_key_last        ( array $array )

array array_keys            ( array $array [, mixed $search_value [, bool $strict = FALSE ]] )

array array_map             ( callable $callback , array $array1 [, array $... ] )

array array_merge_recursive ( array $array1 [, array $... ] )

array array_merge           ( array $array1 [, array $... ] )

bool array_multisort        ( array &$array1 [, mixed $array1_sort_order = SORT_ASC [, mixed $array1_sort_flags = SORT_REGULAR [, mixed $... ]]] )

array array_pad             ( array $array , int $size , mixed $value )

mixed array_pop             ( array &$array )

number array_product        ( array $array )

int array_push              ( array &$array [, mixed $... ] )

mixed array_rand            ( array $array [, int $num = 1 ] )

mixed array_reduce          ( array $array , callable $callback [, mixed $initial = NULL ] )

array array_replace_recur.. ( array $array1 [, array $... ] )

array array_replace         ( array $array1 [, array $... ] )

array array_reverse         ( array $array [, bool $preserve_keys = FALSE ] )

mixed array_search          ( mixed $needle , array $haystack [, bool $strict = FALSE ] )

mixed array_shift           ( array &$array )

array array_slice           ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = FALSE ]] )

array array_splice          ( array &$input , int $offset [, int $length = count($input) [, mixed $replacement = array() ]] )

number array_sum            ( array $array )

array array_udiff_assoc     ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )

array array_udiff_uassoc    ( array $array1 , array $array2 [, array $... ], callable $value_compare_func , callable $key_compare_func )

array array_udiff           ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )

array array_uintersect_a... ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )

array array_uintersect_u... ( array $array1 , array $array2 [, array $... ], callable $value_compare_func , callable $key_compare_func )

array array_uintersect      ( array $array1 , array $array2 [, array $... ], callable $value_compare_func )

array array_unique          ( array $array [, int $sort_flags = SORT_STRING ] )

int array_unshift           ( array &$array [, mixed $... ] )

array array_values          ( array $array )

bool array_walk_recursive   ( array &$array , callable $callback [, mixed $userdata = NULL ] )

bool array_walk             ( array &$array , callable $callback [, mixed $userdata = NULL ] )

array array                 ([ mixed $... ] )

bool arsort                 ( array &$array [, int $sort_flags = SORT_REGULAR ] )

bool asort                  ( array &$array [, int $sort_flags = SORT_REGULAR ] )

array compact               ( mixed $varname1 [, mixed $... ] )

int count                   ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] )

mixed current               ( array $array )

array each                  ( array &$array )

mixed end                   ( array &$array )

int extract                 ( array &$array [, int $flags = EXTR_OVERWRITE [, string $prefix = NULL ]] )

bool in_array               ( mixed $needle , array $haystack [, bool $strict = FALSE ] )

key_exists — Alias of array_key_exists()

mixed key                   ( array $array )

bool krsort                 ( array &$array [, int $sort_flags = SORT_REGULAR ] )

bool ksort                  ( array &$array [, int $sort_flags = SORT_REGULAR ] )

array list                  ( mixed $var1 [, mixed $... ] )

bool natcasesort            ( array &$array )

bool natsort                ( array &$array )

mixed next                  ( array &$array )

pos — Alias of current()

mixed prev                  ( array &$array )

array range                 ( mixed $start , mixed $end [, number $step = 1 ] )

mixed reset                 ( array &$array )

bool rsort                  ( array &$array [, int $sort_flags = SORT_REGULAR ] )

bool shuffle                ( array &$array )

sizeof — Alias of count()

sort — Sort an array

bool uasort                 ( array &$array , callable $value_compare_func )

bool uksort                 ( array &$array , callable $key_compare_func )

bool usort                  ( array &$array , callable $value_compare_func )
