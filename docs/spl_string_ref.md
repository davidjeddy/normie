# String function reference
string addcslashes      ( string $str , string $charlist )

string addslashes       ( string $str )

string bin2hex          ( string $str )

chop — Alias of rtrim()

string chr              ( int $bytevalue )

string chunk_split      ( string $body [, int $chunklen = 76 [, string $end = "\r\n" ]] )

string convert_cyr_s... ( string $str , string $from , string $to )

string convert_uudecode ( string $data )

string convert_uuencode ( string $data )

mixed count_chars       ( string $string [, int $mode = 0 ] )

int crc32               ( string $str )

string crypt            ( string $str [, string $salt ] )

void echo               ( string $arg1 [, string $... ] )

array explode           ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )

int fprintf             ( resource $handle , string $format [, mixed $args [, mixed $... ]] )

array get_html_tran...  ([ int $table = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = "UTF-8" ]]] )

string hebrev           ( string $hebrew_text [, int $max_chars_per_line = 0 ] )

string hebrevc          ( string $hebrew_text [, int $max_chars_per_line = 0 ] )

string hex2bin          ( string $data )

string html_entity_d... ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") ]] )

string htmlentities     ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = TRUE ]]] )

string htmlspecialch... ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )

string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = TRUE ]]] )

string implode          ( string $glue , array $pieces )

join — Alias of implode()

string lcfirst          ( string $str )

int levenshtein         ( string $str1 , string $str2 )

array localeconv        ( void )

string ltrim            ( string $str [, string $character_mask ] )

string md5_file         ( string $filename [, bool $raw_output = FALSE ] )

string md5              ( string $str [, bool $raw_output = FALSE ] )

string metaphone        ( string $str [, int $phonemes = 0 ] )

string money_format     ( string $format , float $number )

string nl_langinfo      ( int $item )

string nl2br            ( string $string [, bool $is_xhtml = TRUE ] )

string number_format    ( float $number [, int $decimals = 0 ] ) || ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )

int ord                 ( string $string )

void parse_str          ( string $encoded_string [, array &$result ] )

int print               ( string $arg )

int printf              ( string $format [, mixed $args [, mixed $... ]] )

string quoted_printa... ( string $str )

string quoted_printa... ( string $str )

string quotemeta        ( string $str )

string rtrim            ( string $str [, string $character_mask ] )

string setlocale        ( int $category , string $locale [, string $... ] )

string sha1_file        ( string $filename [, bool $raw_output = FALSE ] )

string sha1             ( string $str [, bool $raw_output = FALSE ] )

int similar_text        ( string $first , string $second [, float &$percent ] )

string soundex          ( string $str )

string sprintf          ( string $format [, mixed $args [, mixed $... ]] )

mixed sscanf            ( string $str , string $format [, mixed &$... ] )

array str_getcsv        ( string $input [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]] )

mixed str_ireplace      ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

string str_pad          ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] )

string str_repeat       ( string $input , int $multiplier )

mixed str_replace       ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

string str_rot13        ( string $str )

string str_shuffle      ( string $str )

array str_split         ( string $string [, int $split_length = 1 ] )

mixed str_word_count    ( string $string [, int $format = 0 [, string $charlist ]] )

int strcasecmp          ( string $str1 , string $str2 )

strchr — Alias of strstr()

int strcmp              ( string $str1 , string $str2 )

int strcoll             ( string $str1 , string $str2 )

int strcspn             ( string $subject , string $mask [, int $start [, int $length ]] )

string strip_tags       ( string $str [, string $allowable_tags ] )

string stripcslashes    ( string $str )

int stripos             ( string $haystack , string $needle [, int $offset = 0 ] )

string stripslashes     ( string $str )

string stristr          ( string $haystack , mixed $needle [, bool $before_needle = FALSE ] )

int strlen              ( string $string )

int strnatcasecmp       ( string $str1 , string $str2 )

int strnatcmp           ( string $str1 , string $str2 )

int strncasecmp         ( string $str1 , string $str2 , int $len )

int strncmp             ( string $str1 , string $str2 , int $len )

string strpbrk          ( string $haystack , string $char_list )

int strpos              ( string $haystack , mixed $needle [, int $offset = 0 ] )

string strrchr          ( string $haystack , mixed $needle )

string strrev           ( string $string )

int strripos            ( string $haystack , string $needle [, int $offset = 0 ] )

int strrpos             ( string $haystack , string $needle [, int $offset = 0 ] )

int strspn              ( string $subject , string $mask [, int $start [, int $length ]] )

string strstr           ( string $haystack , mixed $needle [, bool $before_needle = FALSE ] )

string strtok           ( string $str , string $token )

string strtolower       ( string $string )

string strtoupper       ( string $string )

string strtr            ( string $str , string $from , string $to ) || ( string $str , array $replace_pairs )

int substr_compare      ( string $main_str , string $str , int $offset [, int $length [, bool $case_insensitivity = FALSE ]] )

int substr_count        ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )

mixed substr_replace    ( mixed $string , mixed $replacement , mixed $start [, mixed $length ] )

string substr           ( string $string , int $start [, int $length ] )

string trim             ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )

string ucfirst          ( string $str )

string ucwords          ( string $str [, string $delimiters = " \t\r\n\f\v" ] )

int vfprintf            ( resource $handle , string $format , array $args )

int vprintf             ( string $format , array $args )

string vsprintf         ( string $format , array $args )

string wordwrap         ( string $str [, int $width = 75 [, string $break = "\n" [, bool $cut = FALSE ]]] )
