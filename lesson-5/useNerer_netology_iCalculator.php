<?php
// --------------------------- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// Код из листинга - такой лучше НИГДЕ и НИКОГДА не использовать!!!
// ---------------------------

class Calculator
{
    /**
     * @param int $x
     * @param int $y
     * @return float|int
     */
    public function getPower(int $x, int $y)
    {
        return pow($x, $y);
    }
}
