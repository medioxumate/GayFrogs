<?php
/**
 * Dating site for gay frogs
 * Created by PhpStorm.
 * @author Brian Kiehn
 * @version 3.0
 * @date 5/5/2019
 *
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


//Require autoload file
require_once('vendor/autoload.php');
require('model/validation-functions.php');
require('model/classes/membership.php');
require('model/classes/premium.php');
require('model/classes/Database.php');

//Session
session_start();

//create an instance of the Base class/ fat free object
//instantiate fat free
$f3 = Base::instance();

//Database
$db = new Database();

//turn on fatfree error reporting
$f3->set('DEBUG', 3);

//Interests arrays
$f3->set('in', array('tv', 'puzzles', 'movies', 'reading', 'cooking',
    'playing cards', 'board games', 'video games'));
$f3->set('out', array('swimming', 'hopping', 'singing', 'floating',
    'collecting', 'croaking'));

//State array
$f3->set('states', array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois',
    'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland',
    'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana',
    'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York',
    'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
    'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah',
    'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming',
    'American Samoa', 'District of Columbia', 'Guam', 'Marshall Islands', 'Northern Mariana Islands',
    'Palau', 'Puerto Rico', 'Virgin Islands'));

//sticky
$f3->set('fn', '');
$f3->set('ln', '');
$f3->set('age', '');
$f3->set('ph', '');
$f3->set('em', '');

//Define a default root
$f3->route('GET /', function(){
    //display a view
    $view = new Template();
    echo $view->render('views/home.html');
});

//Form routes
$f3->route('GET|POST /form', function($f3) {
    //display a view
    $template = new Template();

    //check if $POST even exists, then validate
    if (isset($_POST['fn'])&&isset($_POST['ln'])&&isset($_POST['age'])
        &&isset($_POST['ph'])) {

        //check valid strings and numbers
        if (validAge($_POST['age']) && validName($_POST['fn'])
            && validName($_POST['ln'])&& validPhone($_POST['ph'])) {
            $fname = $_POST['fn'];
            $lname = $_POST['ln'];
            $age = $_POST['age'];
            $phone = $_POST['ph'];
            if(isset($_POST['g'])){
                $gender = $_POST['g'];
            }
            else{
                $gender = 'indeterminate';
            }
            if(isset($_POST['member'])){
                //membership class instantiation
                $member = new premium($fname, $lname, $age, $gender,
                    $phone, ' ', '', '', Array(), Array());
                $_SESSION['member'] = $member;
            }
            else{
                $_SESSION['member'] = new membership($fname, $lname, $age, $gender, $phone,
                    '', '', '');
            }
            $f3->reroute('/info');
        }
        else
        {
            //instantiate an error array with message
            if(!validName($_POST['fn'])){
                $f3->set("errors['fn']", "error: not a valid name.");
            }
            if(!validName($_POST['ln'])){
                $f3->set("errors['ln']", "error: not a valid name.");
            }
            if(!validAge($_POST['age'])){
                $f3->set("errors['age']", "error: not a valid age.");
            }
            if(!validPhone($_POST['ph'])){
                $f3->set("errors['ph']", "error: not a valid phone number.");
            }
            $f3->set('fn', $_POST['fn']);
            $f3->set('ln', $_POST['ln']);
            $f3->set('age', $_POST['age']);
            $f3->set('ph', $_POST['ph']);
        }
    }
    echo $template->render('views/form1.html');
});

$f3->route('GET|POST /info', function($f3) {
    $template = new Template();

    //check if $POST even exists, then validate
    if (isset($_POST['em'])&&isset($_POST['st'])) {

        //check valid strings and numbers
        if (validEmail($_POST['em']) && validState($_POST['st'])) {

            $_SESSION['member']->setEmail($_POST['em']);
            $_SESSION['member']->setState($_POST['st']);
            if(isset($_POST['bio'])){
                $_SESSION['member']->setBio($_POST['bio']);
            }
            else{
                $_SESSION['member']->setBio(' ');
            }
            if($_SESSION['member'] instanceof premium) {
                $f3->reroute('/hobbies');
            }
            else{
                $f3->reroute('/profile');
            }
        }
        else
        {
            //instantiate an error array with message
            if(!validEmail($_POST['em'])){
                $f3->set("errors['em']", "error: not a valid email.");
            }
            if(!validState($_POST['st'])){
                $f3->set("errors['st']", "error: not a valid state.");
            }
        }
    }
    echo $template->render('views/form2.html');
});

$f3->route('GET|POST /hobbies', function($f3) {
    //display a view
    $view = new Template();

    if (!empty($_POST['in']) || !empty($_POST['out'])) {
        if (isset($_POST['in'])) {
            $_SESSION['member']->setIndoor($_POST['in']);
        }
        if (isset($_POST['out'])) {
            $_SESSION['member']->setOutdoor($_POST['out']);
        }
        $f3->reroute('/profile');
    }
    echo $view->render('views/form3.html');
});

$f3->route('GET /profile', function(){
    //display a view
    $view = new Template();

    $premium = $_SESSION['member'] instanceof premium;

    $_SESSION['fn'] = $_SESSION['member']->getFname();
    $_SESSION['ln'] = $_SESSION['member']->getLname();
    $_SESSION['age'] = $_SESSION['member']->getAge();
    $_SESSION['g'] = $_SESSION['member']->getGender();
    $_SESSION['ph'] = $_SESSION['member']->getPhone();
    $_SESSION['em'] = $_SESSION['member']->getEmail();
    $_SESSION['st'] = $_SESSION['member']->getState();
    $_SESSION['bio'] = $_SESSION['member']->getBio();

    if($premium) {
        $_SESSION['in'] = $_SESSION['member']->getIndoor();
        $_SESSION['out'] = $_SESSION['member']->getOutdoor();
    }

    global $db;
    $db->connect();
    $db->insertMember($_SESSION['fn'], $_SESSION['ln'], $_SESSION['age'],
        $_SESSION['g'], $_SESSION['ph'], $_SESSION['em'], $_SESSION['st'], $_SESSION['bio'],
        $premium);
    $id = $db->getMemberID($_SESSION['fn'], $_SESSION['ln'], $_SESSION['age'],
        $_SESSION['g'], $_SESSION['ph'], $_SESSION['em'], $_SESSION['st'], $_SESSION['bio'],
        $premium);

    echo $view->render('views/profile.html');
});

$f3->route('GET /users', function($f3){
    //display a view
    $view = new Template();

    global $db;
    $db->connect();

    $f3->set('users', $db->getMembers());

    echo $view->render('views/admin.html');
});

//run Fat-free
$f3->run();
session_destroy();