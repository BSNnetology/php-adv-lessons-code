<?php
    declare(strict_types = 1);

    // ===================================
    class Person
    {
        private string $userName = 'None';

        // ----------------------
        private function mb_strReplace(string $search, string $replace, string $string): array|string {
            $charset = mb_detect_encoding($string);
            $unicodeString = iconv($charset, "UTF-8", $string);           
            return str_replace($search, $replace, $unicodeString);
        }

        // ----------------------
        private function changeName(string $param, string $search, string $replace): void {
            if (property_exists($this, $param)) {
                $this->{$param} = $this->mb_strReplace($search, $replace, $this->{$param});
                echo "- Result: OK\n";
            } else {
                echo "Свойство '$param' в объекте не обнаружено\n";
            }
        }

        // ----------------------
        public function __set(string $name, mixed $value): void {
            echo "\n__set для '$name' с входными данными: $value" . PHP_EOL;
            
            $isParam = property_exists($this, $name);
            if ($isParam) {
                $this->{$name} = $value;
                echo "- Result: OK\n";
            } else {
                echo "Свойство '$name' в объекте не обнаружено\n";
            }
        }

        // ----------------------
        public function __get(string $name): string {
            echo "\n__get для '$name'" . PHP_EOL;

            $isParam = property_exists($this, $name);
            echo $isParam ? '' : "Свойство '$name' в объекте не обнаружено\n";
            return $isParam ? $this->{$name} : 'Неопределено';
        }

        // ----------------------
        public function __call($name, $arguments): void {
            echo "\n__call Обычный метод '$name' с входными данными: " 
            . implode(', ', $arguments) . PHP_EOL;

            if (method_exists($this, $name)) { 
                $this->{$name}(...$arguments);
            } else {
                echo "Метод '$name' в объекте не обнарухен...\n";
            }
        }

        // ----------------------
        public static function __callStatic($name, $arguments): void
        {
            echo "\n__callStatic Статический метод '$name' с входными данными: " 
            . implode(', ', $arguments) . PHP_EOL;

            echo "- Result: Hello, my frend, " . implode(' ', $arguments) . PHP_EOL;
        }
    }