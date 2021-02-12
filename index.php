<?php

// Will see internal error - no root somethinge r other error in browser

// Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
session_start();
// Require the autoload file
require_once('vendor/autoload.php');
require_once('model/data-layer.php');


// Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

// Define a default route (home page)
$f3 -> route('GET /', function() {
    $view = new Template();
    echo $view -> render('/view/home.html');
});

$f3->route('GET /create', function() {
    $view = new Template();
    echo $view->render("view/createAccount.html");
});

$f3->route('GET /create1', function() {

    $view = new Template();
    echo $view->render("view/dating.html");

});
$f3->route('GET|POST /create1', function() use ($f3) {
    if (isset($_POST['inputName1'])) {
        $_SESSION['inputName1'] = $_POST['inputName1'];
    }
    if (isset($_POST['inputName2'])) {
        $_SESSION['inputName2'] = $_POST['inputName2'];
    }
    if (isset($_POST['gender'])) {
        $_SESSION['gender'] = $_POST['gender'];
    }
    if (isset($_POST['sexual'])) {
        $_SESSION['sexual'] = $_POST['sexual'];
    }
    if (isset($_POST['inputAge'])) {
        $_SESSION['inputAge'] = $_POST['inputAge'];
    }
    if (isset($_POST['sexual'])) {
        $_SESSION['sexual'] = $_POST['sexual'];
    }
    if (isset($_POST['inputPhone'])) {
        $_SESSION['inputPhone'] = $_POST['inputPhone'];
    }
    $f3->set('state', getState());
    $f3->set('sexual', getSex());
    $view = new Template();
    echo $view->render("view/dating.html");
});

$f3->route('GET|POST /create', function($f3) {
    //Check if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Validate the data
        if (empty($_POST['pet'])) {
//                ...
        } else {
//                ...
        }
    }

    $f3->set('gender', getColors());

    $view = new Template();
    echo $view->render('view/createAccount.html');
});

$f3->route('POST /finish', function($f3) {
    if (isset($_POST['outdoor'])) {
        $_SESSION['outdoor'] =  implode(", ", $_POST['outdoor']);
    }

    if (isset($_POST['indoor'])) {
        $_SESSION['indoor'] =  implode(", ", $_POST['indoor']);
    }

    $view = new Template();
    echo $view->render("view/summary.html");
});

$f3->route('POST /summary', function($f3) {

    $f3->set('choice', getSex());
    if(isset($_POST['outdoor'])){
        $_SESSION['outdoor'] = $_POST['outdoor'];
    }
    if(isset($_POST['indoor'])){
        $_SESSION['indoor'] = $_POST['indoor'];
    }
    if(isset($_POST['email'])){
        $_SESSION['email'] = $_POST['email'];
    }
    if(isset($_POST['biography'])){
        $_SESSION['biography'] = $_POST['biography'];
    }
    if(isset($_POST['state'])){
        $_SESSION['state'] = $_POST['state'];
    }
    if(isset($_POST['sexual'])){
        $_SESSION['sexual'] = $_POST['sexual'];
    }
    $f3->set('indoor', inDoor());
    $f3->set('outdoor', outDoor());
    $view = new Template();
    echo $view->render("view/interests.html");

});



$f3->run();