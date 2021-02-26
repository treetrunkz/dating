<?php

// Will see internal error - no root somethinge r other error in browser

// Turn on error reporting

ini_set('display_errors', TRUE);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

session_start();

// Create an instance of the Base class
$f3 = Base::instance();

$validator = new Valid();
$dataLayer = new DataLayer();
$order = new Order();
$controller = new Controller($f3);

//
//$f3->set('states', array(getState()));
//$f3->set('genders', array(getSex()));
//$f3->set('indoors', array(inDoor()));
//$f3->set('outdoors', array(outDoor()));
//$f3->set('orientations', array(getOrientation()));
$f3->set('DEBUG', 3);

// Define a default route (home page)
$f3 -> route('GET /', function() {
    global $controller;
    $controller->home();
});



$f3->route('GET /create1', function() {

    $view = new Template();
    echo $view->render("view/dating.html");

});

$f3->route('GET|POST /create', function($f3) {
    
    global $controller;
    $controller->form();
    
});
//Define an order2 route
$f3->route('GET|POST /order2', function($f3) {

    global $controller;
    $controller->form2();
});

//Define a summary route
$f3->route('GET /summary', function() {

    global $controller;
    $controller->summary();
});

$f3->run();