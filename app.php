<?php
require __DIR__ . '/vendor/autoload.php';
echo 'Autoloader ready.' . PHP_EOL;

use App\Config\AppSettings;
$first = AppSettings::getInstance();
$second = AppSettings::getInstance();

echo $first->getApplicationName() . PHP_EOL;
echo ( $first === $second ) ? 'Same object' : 'Different objects';
echo PHP_EOL;