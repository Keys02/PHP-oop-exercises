<?php
    class Jam
    {
        public int $shelfLifeMonths = 12;
        public int $sweetness;

        public function __construct(
            private string $productName,
            private string $weight,
        ) {}

        public function getProductName() {
            return $this->productName;
        }

        public function getWeight() {
            return $this->weight;
        }

        public function __toString() {
            return "JAM: $this->productName ($this->weight) keeps for $this->shelfLifeMonths months: sweetness $this->sweetness";
        }
    }