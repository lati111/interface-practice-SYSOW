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
            return "blaft";
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
            return "blubt";

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
            return "fluit";
        }
    }
