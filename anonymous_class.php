<?php



/*
 // U cant instantiate  the anonymous class it can coonstructor also can iherite and can be instantiated only once
$framework = new class (" read only param") {

    function  __construct($ro)
    {
        $this->readyOnly  =$ro;

        //$this->readyOnly = "read only param";
    }
    private $readyOnly;

//    private $readyOnly = "read only value ";

    function  print(){ echo $this->readyOnly ;}   // public function  print(){ echo $this->readyOnly ;}

    static  function  hello(){ echo "hello" ;}
} ;

$framework->print();

//$framework :: hello();  */



/*
class myOBJ {
    public  $hello = "Say Hello";
}



$framework = new class (" read only param")  extends  myOBJ  {

    function  __construct($ro)
    {
        $this->readyOnly  =$ro;

        //$this->readyOnly = "read only param";
    }
    private $readyOnly;

//    private $readyOnly = "read only value ";

    function  print(){ echo $this->readyOnly ;}   // public function  print(){ echo $this->readyOnly ;}

    static  function  hello(){ echo "hello" ;}
} ;

echo $framework->hello;  */


//Apply an Interface

interface  reg {
    public  function  print();
}
class myOBJ {
    public  $hello = "Say Hello";
}



$framework = new class (" read only param")  extends  myOBJ implements  reg{

    function  __construct($ro)
    {
        $this->readyOnly  =$ro;

    }
    private $readyOnly;

    function  print(){ echo $this->readyOnly ;}   // public function  print(){ echo $this->readyOnly ;}

    static  function  hello(){ echo "hello" ;}
} ;

echo $framework->hello;





































































