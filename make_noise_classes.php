<?php
    require_once ('make_noise_interface.php');

    // TODO: make the class Dog implement the IMakeNoise interface.
    class Dog // implements ...
    {
        private $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function makeNoise() : string // HOE de hond het geluid maakt.
        {
            // TODO: Implement makeNoise() method.

        }
    }

    // TODO: make the class Fish implement the IMakeNoise interface.
    class Fish // implements ...
    {
        private $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function makeNoise() : string
        {
            // TODO: Implement makeNoise() method.

        }
    }

    // TODO: make the class Bird implement the IMakeNoise interface.
    class Bird // implements ...
    {
        private $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function makeNoise() : string
        {
            // TODO: Implement makeNoise() method.

        }
    }
?>