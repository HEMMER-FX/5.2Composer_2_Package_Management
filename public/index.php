<?php
require '../vendor/autoload.php';
use App\Hello;

$say = new App\Hello();
echo $say->talk();