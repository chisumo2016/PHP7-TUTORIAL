<?php

require  'namespace.php';

//use avelx\comolicated  as avelx;  // php 5

use avelx\complicated \  { hello, anotherloz as al } ;// php 7

$object = new  hello;   //hello is the class  php 7
$object2 = new  al;
//$object = new avelx\hello;   //hello is the class
//$object2 = new avelx\anotherloz;

//$object = new avelx\complicated\hello;
//$object2 = new avelx\complicated\anotherloz;


use function  avelx\complicated\{all, all2 as a2};


//use function  avelx\complicated\{all};
//use function  avelx\complicated\{all2 as a2};

echo "<br/><br/> <h2> Functions : </h2>  <br/>";

all();
a2();
//all2();
//avelx\complicated\all();
//avelx\complicated\all2();

echo "<br/><br/> <h2> Constant : </h2>  <br/>";

use const  avelx\complicated\{HELLO , GOODBYE as GB};

//use const  avelx\comlicated\HELLO;
//use const  avelx\comlicated\GOODBYE as GB;


echo HELLO ;
echo GB;

//echo avelx\complicated\HELLO;
//echo avelx\complicated\GOODBYE;