<?php
/**
 * Created by PhpStorm.
 * User: Michael Horn
 * Date: 1/15/2018
 * Time: 5:51 PM
 * File to create a view of the home page with the fat-free framework
 */

session_start();

// Turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);


require_once ('vendor/autoload.php');

$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

$f3 -> route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
}
);

$f3 -> route('GET /personal', function($f3) {
    if(isset($_POST['submit']))
    {
        $_SESSION['fname'] = $_POST['fname'];
        $lname = $_SESSION['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];

        include('model/validate.php');
    }
    $f3->set('fname',$_POST['fname']);
    $f3->set('lname',$lname);
    $f3->set('age',$age);
    $f3->set('gender',$gender);
    $f3->set('phone',$phone);
    $template = new Template();
    echo $template->render('pages/personal.html');
});

$f3 -> route('POST /profile', function($f3) {
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $state = $_POST['state'];
        $seeking = $_POST['seeking'];
        $bio = $_POST['bio'];

        //include('model/validate.php');
    }
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['phone'] = $_POST['phone'];

    $template = new Template();
    echo $template->render('pages/profile.html');
});

$f3->route('POST /interests', function($f3) {
    if(isset($_POST['submit']))
    {
        $indoor = $_POST['indoor'];
        $outdoor = $_POST['outdoor'];
    }

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['seeking'] = $_POST['seeking'];
    $_SESSION['bio'] = $_POST['bio'];

    $template = new Template();
    echo $template->render('pages/interests.html');
});

$f3->route('POST /results', function($f3) {
    if(isset($_POST['submit']))
    {
    }
    $_SESSION['indoor'] = $_POST['indoor'];
    $_SESSION['outdoor'] = $_POST['outdoor'];

    $f3->set('fname',$_SESSION['fname']);
    $f3->set('lname',$_SESSION['lname']);
    $f3->set('age',$_SESSION['age']);
    $f3->set('gender',$_SESSION['gender']);
    $f3->set('phone',$_SESSION['phone']);
    $f3->set('email',$_SESSION['email']);
    $f3->set('seeking',$_SESSION['seeking']);
    $f3->set('state',$_SESSION['state']);
    $f3->set('bio',$_SESSION['bio']);
    $f3->set('indoor',$_SESSION['indoor']);
    $f3->set('outdoor',$_SESSION['outdoor']);
    $template = new Template();
    echo $template->render('pages/results.html');
});

//Run Fat-Free Framework
//tests
$f3->run();
