<?php

require_once ('./src/strings/strings.php');

$string = "abcdefghijklmnopqrstuvwxyz";

echo "Normie output: ";
print_r( \stristr("nop", $string) );
echo "\n";


