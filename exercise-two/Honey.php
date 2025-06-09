<?php
    class Honey extends Spread
    {
        public $isManuka = false;

        public function __construct(string $productName, float $weight) {
            $this->productName = $productName;
            $this->weight = $weight;
        }

        public function __toString() {
            return "HONEY: Clear Honey ({$this->weight}g) keeps for $this->shelfLifeMonths" . (!$this->isManuka) ? "(Manuka)" : "(NOT Manuka)";
        }
    }