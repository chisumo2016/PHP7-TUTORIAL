<?php


/*$num = "hello";

assert(is_numeric($num), 'This is an  error string ');  // return false*/


$num = 100;

assert(is_numeric($num), 'This is an  error string ');  // return false

//PHP 7

$num = 100;

assert(1 , 'This is an  error string ');  // return false


//use operator

$num = 100;

assert($num > 50 , 'This is an  error string ');  // return true

// Throw an object


ini_set('assert.exception', 1);  // Enabling

class  HandleError extends  AssertionError {



    // some props / method and so forth here
}

$num = 100;

assert($num > 500 , new HandleError('some error text'));  // return false





































