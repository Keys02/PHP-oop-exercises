<?php
    class Car extends Vehicle
    {
        public function __construct(int $numDoors, string $fuel, private int $numSeats, private float $roadTax) {
            Vehicle::__construct($numDoors, $fuel); //Augmenting the __construct method in the Vehicle class 
            $this->numSeats = $numSeats;
            $this->roadTax = $roadTax;
        }

        public function getNumSeats(): int {
            return $this->numSeats;
        }

        public function getRoadTax(): float {
            return $this->roadTax;
        }

        public function __toString() {
            return "Car with $this->numSeats seats, $this->numDoors doors and $this->fuel as fuel has a road tax of $this->roadTax";
        }
    }