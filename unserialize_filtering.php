<?php

// Take an object  alive  and turn into a string    $data = '{ }'

class newObj {
    public  $prop = "Hello world ";

    private  $priv = "Thisis private to the object  ";

    private  $arr = [ 20, 200 , 500 , 600 ];
}

$data = serialize(new newObj);
//$data = '{ }';
echo  $data;

// Take back to php object

$unserialised = unserialize($data , ["allowed_classes " => ["newObj"] ] );  //sec param is new to php 7

//$unserialised = unserialize($data , ["allowed_classes " => ["cake"] ] );  //sec param is new to php 7
//$unserialised = unserialize($data , ["allowed_classes " => ["cake" ."newObj"] ] );  //sec param is new to php 7

//$unserialised  = {}  // return objec

echo  '<br/> <br/>' .$unserialised -> prop;
//echo  '<br/> <br/>' . var_export($unserialised );












































