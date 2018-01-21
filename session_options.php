<?php
session_start([  // Associative array

    'cache_limiter' => 'private' ,
    'read_and_close'  => false, // new in php 7

]);

$_SESSION['name'] = 'Juman';

?>

<a href="logged.php ">Logged In</a>
