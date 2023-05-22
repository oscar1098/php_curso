<?php


Class MyClass{
    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";


    function printHello(){
        echo $this -> public . "<br>";
        echo $this -> protected . "<br>";
        echo $this -> private . "<br>";
    }
}

$objeto = new MyClass;

echo $objeto -> public;
echo "<br>";

// echo $objeto -> protected;
// echo "<br>";

// echo $objeto -> private;



Class MyClass2 extends MyClass{
    function printHello(){
        echo $this -> public . "<br>";
        echo $this -> protected . "<br>";
        echo $this -> private . "<br>";
    }
}

$objeto2 = new MyClass2;

echo $objeto2 -> printHello();




