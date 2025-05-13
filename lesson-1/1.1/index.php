<?php
    declare(strict_types=1);

    // ===================================
    $student = new Student(20, 'Аркадий', 'Иванов');
    echo "Имя: $student->name; Возраст: " . $student->getAge() . PHP_EOL;

    // ===================================
    class Student
    {
        public $age;
        public $name;
        public $surname;

        // -----------------
        public function __construct(int $age, string $name, string $surname) {
            $this->age = $age;
            $this->name = $name;
            $this->surname = $surname;
        }

        // -----------------
        public function setAge(int $age): void {
            if ($age > 0) {
                $this->age = $age;
            }
        }

        // -----------------
        public function getAge(): int {
            return $this->age;
        }
    }