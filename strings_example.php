<?php

use davidjeddy\Normie\Strings as normie_strings;

class Example
{

    public $string = "abcdefghijklmnopqrstuvwxyz";

    public function spl()
    {
        echo "SPL output: ";
        print_r( \stristr($this->string, "nop") );
    }

    public function normie()
    {
        echo "Normie output: \n";
        print_r( \normie_strings\stristr("nop", $this->string) );
    }
}

$example = New Example;

echo $example->spl();

echo $example->normie();

