<?php
    include_once __DIR__ . '/Vehicle.php';
    include_once __DIR__ . '/Car.php';
    include_once __DIR__ . '/Van.php';

    $car1 = new Car(4, 'petrol', 4, 3.50);
    $van1 = new Van(3, 'petrol', true);

    echo $car1;
    echo '<br/>';
    echo $van1;
