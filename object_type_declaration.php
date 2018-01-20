<?php
/* Object Type Declaration   */
/*
function parse(array  $kit){
    echo '<pre>'. json_encode($kit, JSON_PRETTY_PRINT).'</pre>';
}

$arr = array("hello", "world", "another", "word");

$arr = array("test" =>"hello") ; // Associative array .Key and Value

parse($arr);

*/

/*
 *
 *
function parse(callable  $callback){

    echo "This string came from the parse function <br/></br>";

    $callback();
}
parse( function (){
    echo "COLLLABLE FUNCTION -This came from the callback function.";
});

// or
$func = function (){
    echo "COLLLABLE FUNCTION -This came from the callback function.";
};

parse($func);

*/


/*
interface  checker{}
class cake implements  checker {}

class salad implements  checker {}

function restraunt (checker $food){
    echo var_dump($food);
}


$box = new salad;
restraunt($box);

*/

//Self must be used within the class or itseld

class  cake{
    function  icing (self $thisCake)    //self $thisCake= new cake
    {
        echo 'Cake to ice : <br>';
        echo var_dump($thisCake);
    }
}

class pudding {}

$Cake1 = new cake;
$Cake2 = new cake;
$Cake2->icing($Cake1);  //invoking and passing



