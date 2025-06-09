<?php
    include __DIR__ . '/Spread.php';
    include __DIR__ . '/Jam.php';
    include __DIR__ . '/Honey.php';

    $jam1 = new Jam("Raspberry Conserve", 45.5);
    $jam1->shelfLifeMonths = 24;
    $jam1->sweetness = 5;

    $honey1 = new Honey("Clear", 90.0);

    echo $jam1->__toString();
    print '<br/>';
    echo $honey1->__toString();