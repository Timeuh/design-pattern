<?php

use App\Config;

require('../vendor/autoload.php');

$config = Config::getInstance();
$secondConfig = Config::getInstance();

echo $config->get('apiKey');
echo $config === $secondConfig ? 'Les deux instances sont identiques' : 'Les deux instances sont différentes';
