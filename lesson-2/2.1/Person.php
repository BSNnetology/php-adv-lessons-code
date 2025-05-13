<?php
    class Person
    {
        protected $name;
        protected $surname;

        // -----------------
        public function __construct(string $name, string $surname) {
            $this->name = $name;
            $this->surname = $surname;
        }

        public function getHello(): string {
            return "Hello, person $this->name $this->surname";
        }
    }


