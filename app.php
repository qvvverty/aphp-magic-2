<?php
declare(strict_types=1);

include_once 'class/Authentication.php';

$auth = new Authentication();
$auth->authenticate();