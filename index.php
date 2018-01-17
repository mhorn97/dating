<?php
/**
 * Created by PhpStorm.
 * User: Michael Horn
 * Date: 1/15/2018
 * Time: 5:51 PM
 * File to create a view of the home page with the fat-free framework
 */

require_once ('vendor/autoload.php');

$f3 = Base::instance();

$f3 -> route('GET /', function() {
    $view = new View;
    echo $view->render('pages/home.html');
}
);

//Run Fat-Free Framework
$f3->run();
