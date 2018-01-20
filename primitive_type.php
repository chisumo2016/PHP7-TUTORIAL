<?php
/* Primitive Type  Float String Bool  Int   */

function parse(int...$ints){
    echo '<pre>'. json_encode($ints, JSON_PRETTY_PRINT).'</pre>';
}

parse(20, "200", 22.22 , true);