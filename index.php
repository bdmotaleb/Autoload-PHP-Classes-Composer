<?php

use App\Student;
use App\SSIT\Motaleb;

require_once 'vendor/autoload.php';


$student = new Student();

echo $student->index();

$ssit = new Motaleb();

echo $ssit->index();
