<?php
// --------------------------- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// Код из листинга - такой лучше НИГДЕ и НИКОГДА не использовать!!!
// ---------------------------

/**
 * Class Student
 */
class Student extends Person
{
    /**
     * @return string
     */
    public function getHello(): string
    {
        return "Hello, $this->name $this->surname";
    }
}

