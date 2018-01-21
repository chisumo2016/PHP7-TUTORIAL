<?php

require  'namespace.php';

use avelx\comolicated  as avelx;   // alliase

$object = new avelx\hello;   //hello is the class
$object2 = new avelx\anotherloz;

//$object = new avelx\complicated\hello;
//$object2 = new avelx\complicated\anotherloz;

echo "<br/><br/> <h2> Functions : </h2>  <br/>";


avelx\complicated\all();
avelx\complicated\all2();

echo "<br/><br/> <h2> Constant : </h2>  <br/>";


echo avelx\complicated\HELLO;
echo avelx\complicated\GOODBYE;