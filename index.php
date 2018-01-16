<?php
/**
 * Created by PhpStorm.
 * User: Michael Horn
 * Date: 1/15/2018
 * Time: 5:51 PM
 */

require_once ('vendor/autoload.php');

$f3 = Base::instance();

$f3 -> route('GET /', function() {
    $view = new View;
    echo $view->render
    ('pages/home.html');
}
);

//Run Fat-Free Framework
$f3->run();
