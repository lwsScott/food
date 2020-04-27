<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//instantiate the F3 Base class
$f3 = Base::instance();

//define a default route
//when user visits the default root(file) - ...328/hello
//it runs the function
$f3->route('GET /', function(){
    //echo '<h1>Food Home</h1>';

    //display a page called home.html
    $view = new Template();
    echo $view->render('views/home.html');
});

// define another route
// called breakfast
$f3->route('GET /breakfast', function(){
    //echo '<h1>Welcome to my breakfast page</h1>';

    //display a page called home.html
    $view = new Template();
    echo $view->render('views/bfast.html');
});

//run fat free
$f3->run();
