<?php
    define("ROOT_DIRECTORY", dirname(__DIR__));

    require_once ROOT_DIRECTORY . '/vendor/autoload.php';

    use Mattsmithdev\Product;

    $p1 = new Product('7', 'hammer', '9.99');
    var_dump($p1);
