<?php

/**/
/*RETURN TYPE DECLARATION new in php 7 we may return and array or object*/
/*
function dataReturn()
{
    return "This is what the function will give back";
}

echo var_export(dataReturn() );

*/

/*
//integer
function dataReturn(): int
{
    return 20;  //
}

echo var_export(dataReturn() );

*/
/*
//Float
function dataReturn(): float
{
    return 20;  //   true , string , integer
}

echo var_export(dataReturn() );

*/

/*
//Boolean
function dataReturn(): bool
{
    return 20;  //   true , string , integer
}

echo var_export(dataReturn() );
*/

/*
//String
function dataReturn(): string
{
    return 20;  //   true , string , integer
}

echo var_export(dataReturn() );

*/

/*
//Data Object  array

//Array
function dataReturn(): array
{
    //return array(20, 'hello');  //   true , string , integer
    return array('hello' => "Tanzanioa");  // Associative array
}

echo var_export(dataReturn() );
*/

// CLASS

/*
class myOBJ { }
class cake {}
    function  dataReturn() : myOBJ{

        return new cake;
    }

    echo var_export(dataReturn());
*/

/*interface  register { } // check if the class has method or properties

class myOBJ implements  Register{ }
class cake {}
function  dataReturn() : register{

    return new myOBJ;
}

echo var_export(dataReturn());

*/

// Callable
/*
function  dataReturn(): callable {  // call/ return  function

    return  function (){echo "hello" ;};
}

echo var_export(dataReturn()); */

//  SELF   used within the class

class  myOBJ{

    function  dataReturn($object): self {  // used within the class

        return  $object;
    }
}

class cake{}
$a = new myOBJ;
echo var_export($a->dataReturn(   new myOBJ  ));



































































