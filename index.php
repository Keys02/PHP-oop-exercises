<?php
    include_once __DIR__ . '/Cat.php';
    include_once __DIR__ . '/Pet.php';

    $cat1 = new Cat();
    $pet1 = new Pet();
    
    $cat1->name = 'Mr Fluffy';
    $cat1->breed = 'long-haired mix';
    $cat1->age = 2;

    print $cat1->name . PHP_EOL;
    print $cat1->breed . PHP_EOL;
    print $cat1->age . PHP_EOL;

    $pet1 = new Pet();
    $pet1->setName('Fifi');
    echo $pet1->getName();