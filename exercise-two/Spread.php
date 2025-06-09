<?php
    abstract class Spread
    {
        protected string $productName;
        protected float $weight;
        public int $shelfLifeMonths = 12;

        public function getProductName() {
            return $this->productName;
        }

        public function getWeight() {
            return $this->weight;
        }
    }