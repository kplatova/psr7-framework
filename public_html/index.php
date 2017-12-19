<?php
$name = $_GET['name'] ?? 'Guest';
header('X-Developer: Kplatova');
echo 'Hello, ' . $name . '!' . PHP_EOL;