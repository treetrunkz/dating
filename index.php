<?php

// Will see internal error - no root somethinge r other error in browser

// Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

// Define a default route (home page)
$f3 -> route('GET /', function() {
    $view = new Template();
    echo $view -> render('/view/home.html');
});

//$f3->route('GET /dating.html', function() {
//    $view = new Template();
//    echo $view->render('view/dating.html');
//});
//
//$f3 -> route('GET /createAccount.html', function() {
//    $view = new Template();
//    echo $view -> render('view/createAccount.html');
//});
//
//$f3->route('GET /dating/@item', function($f3, $params) {
//    var_dump($params);
//    $menu = array('eggs', 'waffles', 'pancakes');
//    $item = $params['item'];
//    if (in_array($item, $menu)){
//        echo "We serve $item";
//    }
//    else {
//        echo "Sorry, we don't serve $item";
//    }
//});
//  Run fat free - has to be the last thing in the file
$f3->run();