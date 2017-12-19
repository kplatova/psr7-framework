<?php

use Framework\Http\Request;

chdir(dirname(__DIR__));
require 'src/Framework/Http/Request.php';

### Initialization

$request = new Request();

### Action

$name = $_GET['name'] ?? 'Guest';
header('X-Developer: Kplatova');
echo 'Hello, ' . $name . '!' . PHP_EOL;