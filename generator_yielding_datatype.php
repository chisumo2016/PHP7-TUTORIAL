<?php
//Generator values function

class   myOBJ{  }

// Return Primitive type
 function values()
 {
     /*yield from ['string', 'array', 100];   //yield 'string';
     yield from  array("hello" => 100, "key" => "key2");//yield 100;
     yield from new myOBJ; // Wont work only work for array and string*/

     // function are callable

     yield function ( ){ echo ' Hellow World'; };


     /*yield ['string', 'array', 100];   //yield 'string';
     yield array("hello" => 100, "key" => "key2");//yield 100;
     yield new myOBJ;     //yield 1001.120;
     yield true;*/

 }

$control = values();  // invoke the generator function and create  a object

/*foreach ($control  as $value  ) {  //yield will be assign to a value
    //echo '<br>' .  $value;
    echo '<br>' .  json_encode($value, JSON_PRETTY_PRINT);
}*/


foreach ($control  as $value  ) {  //yield will be assign to a value
    //echo '<br>' .  json_encode($value, JSON_PRETTY_PRINT);
    $value();
}











/*echo $control ->current();

echo $control->next();
echo '<br> '.$control ->current();

echo $control->next();
echo '<br> '.$control ->current();


echo $control->next();
echo '<br> '.$control ->current();*/
