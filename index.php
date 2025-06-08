<?php
    include_once __DIR__ . '/Cat.php';

    $cat1 = new Cat();
    $cat1->name = 'Mr Fluffy';
    $cat1->breed = 'long-haired mix';
    $cat1->age = 2;

    print $cat1->name . PHP_EOL;
    print $cat1->breed . PHP_EOL;
    print $cat1->age . PHP_EOL;