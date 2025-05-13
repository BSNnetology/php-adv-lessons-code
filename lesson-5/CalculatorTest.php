<?php
    use PHPUnit\Framework\TestCase;
    include_once 'Calculator.php';

    // ===================================
    class CalculatorTest extends TestCase
    {
        /**
         * @dataProvider providerGetPower
         */
        public function testGetPower($x, $y, $exepted): void {
            $calculator = new Calculator();
            $powerResult = $calculator->getPower($x, $y);
            $this->assertEquals($exepted, $powerResult);
        }

        // ---------------------
        public function providerGetPower(): array {
            return [
                'Test 1'=>[2, 2, 4],
                'Test 2'=>[2, 3, 8],
                'Test 3'=>[3, 5, 243],
            ];
        }
    }
