<?php
    require_once ('make_noise_interface.php');

    class Dog implements IMakeNoise
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
            return "loud barking";
        }
    }

    class Fish implements IMakeNoise
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
            return "bubbling fish noises";

        }
    }

    class Bird implements IMakeNoise
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
            return "annoying bird noises";
        }
    }
