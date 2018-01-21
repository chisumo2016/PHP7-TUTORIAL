<?php

// $this
$context = function () {  // treating as object and put in variable

    // var_dump( $this);

    echo $this->prop;

};
class newObj {
    public  $prop = "Hello world";
}
$context->call( new newObj());  // invoke













































