<?php
    class Student extends Person
    {
        public function getHello(): string {
            return "Hello, student $this->name $this->surname";
        }
    }

