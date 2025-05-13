<?php
    declare(strict_types = 1);

    // ===================================
    trait IteratorTrait
    {
        private static int $count = 0;

        public function current(): int {
            return self::$count;
        }

        public function next(): void {
            self::$count++;
        }
    }

    // ===================================    
    trait Loggable {
        use IteratorTrait;

        public function log(string $message): void {
            $cur = $this->current();
            echo "\nЛогирование: $message";
            echo "\nКоличество вызовов конструктора: $cur\n";
        }
    }
        
    // ===================================    
    trait Serializabled {
        use Loggable;
        
        public function serialize(): string {
            return serialize($this);
        }
        
        public function unserialize($data): mixed {
            return unserialize($data);
        }
    }

    // ===================================
    class User {
        use Serializabled;

        private string $name;
        private string $rating = 'Неопределено';

        public function __construct(string $name) {
            $this->next();
            $this->name = $name;
            $this->log("Пользователь $name создан...");
        }
    }




