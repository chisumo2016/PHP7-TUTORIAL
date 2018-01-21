<?php

 function satNav(){


     $distance = 0;

     echo 'Start from driveway .';
     yield  "<br> First Stop .";

     echo '<br> Take a Left.';
      yield  '<br> Second Stop sign .';

     echo '<br> Destination reached .';
     echo '<br>  Your journey was ' . $distance . 'miles';
 }

$control = satNav(); // this this like pedal in ur car
//echo $control->current(); // very useful
$val = $control ->current();
echo $val . 'concat 123';

echo '<br><br><br><br>';

$control->next();  // continue journey

echo $control->current();
$control->next();