<?php

require "vendor/autoload.php";

use CowSay\Cow;

$cow = new Cow("Hello World !");
$cow->setTongue('U');

echo $cow->say();
