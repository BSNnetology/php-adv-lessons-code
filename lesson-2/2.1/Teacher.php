<?php
class Teacher extends Person
{
    public function getHello(): string {
        return "Hello, teacher $this->name $this->surname";
    }
}
