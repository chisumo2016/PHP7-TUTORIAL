<?php

function values(){
    yield from Gen2();//yield 200;
    yield 300;
    return 500;  // New in php 7
}


function Gen2 (){
    yield 'This is from Gen2 ';
    yield 'This is from Gen200 ';
    yield from Gen3();
}



function Gen3 (){
    yield 'This is from Gen3';
    yield 'This is from Gen300 ';
}

$control = values();

foreach ( $control as $value){
    echo '<br> ' . $value;
}


//Get return value

echo '<br>' .  $control->getReturn();
