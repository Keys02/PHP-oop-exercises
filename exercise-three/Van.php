<?php
    class Van extends Vehicle
    {
        public function __construct(
            int $numDoors, 
            string $fuel, 
            private bool $commercialTax = false
            ) {
            Vehicle::__construct($numDoors, $fuel); //Augmenting the __construct method in the Vehicle class 
            $this->commercialTax = $commercialTax;
        }

        public function getCommercialTax() : bool {
            return $this->commercialTax;
        }
    }