<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
// start session
session_start();
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

// define another route
// called breakfast/green-eggs
$f3->route('GET /breakfast/green-eggs', function(){
    //echo '<h1>Welcome to my breakfast page</h1>';

    //display a page called home.html
    $view = new Template();
    echo $view->render('views/greenEggsAndHam.html');
});

// define another route
// called breakfast/green-eggs
$f3->route('GET /breakfast/pancakes', function(){
    //echo '<h1>Welcome to my breakfast page</h1>';

    //display a page called home.html
    $view = new Template();
    echo $view->render('views/pancakes.html');
});

// define another route
// called breakfast/green-eggs
$f3->route('GET|POST /order', function($f3){
    // if the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        var_dump($_POST);
        //array(2) { ["food"]=> string(5) "pizza" ["meal"]=> string(6) "dinner"

        // validate the data
        if (empty($_POST['food']))
        {
            echo "<p>Please enter a food</p>";
        }
        elseif ($_POST['meal'] != 'breakfast' && $_POST['meal'] != 'lunch'
            && $_POST['meal'] != 'dinner')
        {
            echo "<p>Please enter a valid meal choice</p>";
        }
        // data is valid
        else
        {
            // store the data in the session array
            $_SESSION['food'] = $_POST['food'];
            $_SESSION['meal'] = $_POST['meal'];

            // redirect to summary page
            $f3->reroute('summary');
            session_destroy();
        }
    }
    // create an array called meals
    $meals = array('breakfast', 'lunch', 'dinner');
    $f3->set('meals', $meals);


    //display a page called order.html
    $view = new Template();
    echo $view->render('views/order.html');
});

$f3->route('GET /summary', function(){
    //echo '<h1>Food Home</h1>';

    //display a page called home.html
    $view = new Template();
    echo $view->render('views/summary.php');
});

//run fat free
$f3->run();
