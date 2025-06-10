<?php
    declare(strict_types=1);

    namespace Mattsmithdev;

    
    class Product
    {
        public function __construct(
            private string $id,
            private string $description,
            private string $price
        ) {}

        # Getters
        public function getId(): string {
            return $this->id;
        }

        public function getDescription(): string {
            return $this->description;
        }

        public function getPrice(): string {
            return $this->price;
        }

        # Setters
        public function setId(string $id): void {
            $this->id = $id;
        }

        public function setDescription(string $description): void {
            $this->description = $description;
        }

        public function setPrice(string $price): void {
            $this->price = $price;
        }
        
    }