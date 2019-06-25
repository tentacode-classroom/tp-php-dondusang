<?php

require_once(__DIR__.'/../vendor/autoload.php');

use Ynov\Application;

$application = new Application();
$application->bootstrap();

require_once(__DIR__.'/../src/templates/index.html.php');
