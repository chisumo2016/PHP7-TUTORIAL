<?php
/*
class myClass {
/*    /*function  myClass($arg1){
        $this->createProp = $arg1;
    }*/ // oldy style constructor

   /* function  __construct($arg1){
        $this->createProp = $arg1;
    } // New in PHP to use constructor

    static  function  method() {echo "method run" ;}*/

//}


/*$test = new myClass("old style constructor");

echo $test->createProp;*/


//myClass::method();



/*

//echo password_hash("password", PASSWORD_DEFAULT);
echo password_hash("password", PASSWORD_DEFAULT, array(
    //'salt ' => 'hdhdhhdhhhddh' // has ben omited
    'cost'  =>10
));  */



$fp = fopen('http://www.example.com/', 'r');

$meta = stream_get_meta_data($fp);

echo '<pre>' . json_encode($meta, JSON_PRETTY_PRINT) . '</pre>';

fclose ($fp);

