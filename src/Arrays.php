<?php

function Astristr($needle, $haystack, $before_needle = FALSE) {
    return \stristr($haystack, $needle, $before_needle);
}