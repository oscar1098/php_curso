<?php

interface iTemplate{
    public function setVariable($name);
    public function getHtml();
}

Class Template implements iTemplate {
    public function setVariable($name){

    }
    public function getHtml(){

    }
}

// --------------------------------------------------------------------------------------------------------------------------------------

interface a{
    public function prueba();
}

interface b extends a{
    public function prueba2(){

    }
}


Class ce implements b{
    public function prueba(){

    }
    public function prueba2(){

    }
}

// ----------------------------------------------------------------------------------------------------------------------------------------

interface c extends a,b{
    public function prueba3();
}


Class d implements c{
    public function prueba(){}
    public function prueba2(){}
    public function prueba3(){}
}


