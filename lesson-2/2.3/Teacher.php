<?php
class Teacher implements PersonInterface
{
    public function getHello(string $name, string $surname): string {
        return "Hello, teacher $name $surname";
    }
}
