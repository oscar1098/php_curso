<?php

use Controllers\CourseControllers;
use Models\Course;
   
spl_autoload_register(function($clase){
    // echo str_replace('\\','/',$clase) . ".php";
    if (file_exists(str_replace('\\','/',$clase) . ".php")) {
        require_once(str_replace('\\','/',$clase) . ".php");
    }
});

$course = new CourseControllers;
$course -> saludar();






