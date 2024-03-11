<?php

use App\MySQLQueryBuilder;

require('../vendor/autoload.php');


$builder = new MySQLQueryBuilder();

$query = $builder->select('email, password')
    ->from('users')
    ->where('age > 18')
    ->getQuery();

echo $query;