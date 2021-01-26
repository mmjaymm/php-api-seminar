<?php

require_once './model/table.php';
require_once './model/employee.php';
require_once './controller/input.php';
require_once './controller/output.php';
require_once './controller/ManageEmployee.php';

$dbcon = new PDO("mysql:host=localhost;dbname=fujitsu", "employee", "1234", array(\PDO::ATTR_PERSISTENT => true)) or die("Failed to connect!");

//$_POST['fname'] = 'aileen';
//$_POST['lname'] = 'era';
//$_POST['contactnumber'] = '1234567890';
//$_POST['email'] = 'aileen@y.com';

header('Content-Type: application/json');

$class = $_GET['class'];
$method = $_GET['method'];


$in = new Input();
$out = new Output();
$me = new $class();

$in->postfields = $_POST;

$result = json_decode($me->$method($in, $out));

var_dump($result);