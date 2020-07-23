<?php

use Demo\FingerRecognizer;

require_once 'vendor/autoload.php';

$service = new FingerRecognizer();
$service->determineFinger(15); //3
