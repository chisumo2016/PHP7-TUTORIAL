<?php

//Match regular data for matching

$subject  = 'Aaaaaa aa Bbb bbb bbb ';

$numOfMatches;

echo 'Subject to analyse:  <b>' . $subject ." <br><br><br><br><br><br><br>";


preg_replace_callback_array(  //php 7 regular exp
    [
        // key => value are function
        '~[a]+~i'  => function ($match) { echo $match[0] . '  match found  [a] <br/>   <br/> ';},

        '~[b]+~i'  => function ($match) { echo $match[0] .  ' match found  [b] <br/>   <br/> ';}

    ],

    $subject,

    1,   // option limiting

    $numOfMatches    // return number of matches in array

);

echo $numOfMatches;






//~[a]+}~i'  => function ($match) { echo $match[0] . 'match found  [a] <br>   <br> ';},

//'~[b]+}~i'  => function ($match) { echo $match[0] . ' match found  [b] <br>   <br> ';}