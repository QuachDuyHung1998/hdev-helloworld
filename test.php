<?php
require_once 'vendor/autoload.php';

$myPackage = new \Hdev\Helloworld\Test\Hello();
echo $myPackage->sayHello();
