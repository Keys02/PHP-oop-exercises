<?php
    abstract class Spread
    {
        public int $shelfLifeMonths = 12;

        public function __construct(
            protected string $productName,
            protected float $weight
        ){}

        public function getProductName() {
            return $this->productName;
        }

        public function getWeight() {
            return $this->weight;
        }
    }