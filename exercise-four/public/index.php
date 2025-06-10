<?php
    define("ROOT_DIRECTORY", dirname(__DIR__));

    require_once ROOT_DIRECTORY . '/vendor/autoload.php';

    use Mattsmithdev\Product;
    use Mattsmithdev\FakerSmallEnglish\Factory;

    $faker = Factory::create();

    // Randomn names as an underlined topic
    echo str_pad("Random names", 20, " ", STR_PAD_LEFT) . PHP_EOL;
    echo str_pad("", 30, "---", STR_PAD_BOTH), PHP_EOL;

    for($i = 1; $i <= 10; $i++) {
        var_dump($faker->name()) . PHP_EOL;
    }

    echo "\n";

    $p1 = new Product('7', 'hammer', '9.99');
    var_dump($p1);

