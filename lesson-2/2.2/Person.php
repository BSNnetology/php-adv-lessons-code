<?php
    abstract class Person
    {
        protected $name;
        protected $surname;

        // -----------------
        public function __construct(string $name, string $surname) {
            $this->name = $name;
            $this->surname = $surname;
        }

        // -----------------
        abstract public function getHello(): string;
    }


