<?php
    include __DIR__ . '/Jam.php';
    $food1 = new Jam("Raspberry Conserve", 45.5);
    $food1->shelfLifeMonths = 24;
    $food1->sweetness = 5;

    print $food1->__toString();