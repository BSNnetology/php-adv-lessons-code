<?php
    class Student implements PersonInterface {
        public function getHello(string $name, string $surname): string {
            return "Hello, student $name $surname";
        }
    }

