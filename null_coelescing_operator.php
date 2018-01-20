<?php
// GET GLOBAL  http://localhost:8080/php7_tutorial/null_coelescing_operator.php/?hello & var2=two
echo '<pre>' . json_encode($_GET, JSON_PRETTY_PRINT) . '</pre><br/>';

// If we have value called net
//echo  $_GET['name'] ?? 'Loz';

echo  $a ?? 'Loz';

$personName = "John";
$myVar = $personName ?? $_GET['name'] ?? 'Lozina';   // ?? if not

echo $myVar;
































































