<?php
// sending a value yield
 function satNav()
 {


     $distance = 0;

     echo 'Start from driveway .';
     $distance = yield;

     echo $distance . ' miles . <br> Now take a left. <br>';
     $distance = yield;

     echo $distance . ' miles . <br> Destination Reached <br>';
 }

$control = satNav();  // invoke the generator function and create  a object
$control ->current();

echo '<br> ..... Analysing distance .... <br><br>';

$control->send( 50 );  // sending method

echo '<br> ..... Analysing distance .... <br><br>';

$control->send( 500 );  // sending method
