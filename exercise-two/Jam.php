<?php
    class Jam extends Spread
    {
        public int $sweetness;

        public function __toString() {
            return "JAM: $this->productName ($this->weight) keeps for $this->shelfLifeMonths months: sweetness $this->sweetness";
        }
    }