<?php
    abstract class Vehicle
    {
        public function __construct(
            protected int $numDoors,
            protected string $fuel,
        ) {}
    }