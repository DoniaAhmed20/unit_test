<?php

use PHPUnit\Framework\TestCase;
require './src/Calculator.php';

Class CalculatorTest extends TestCase{
    public function testFactorial(){
        $F = new Calculator;
        
        $this->assertEquals(1,$F->Factorial(0)); 
        $this->assertEquals(1,$F->Factorial(1)); 
        $this->assertEquals(120,$F->Factorial(5)); 
        $this->assertEquals(null,$F->Factorial(-3)); 
        $this->assertEquals(null,$F->Factorial(1.5)); 
        $this->assertEquals(null,$F->Factorial(false));
        $this->assertEquals(null,$F->Factorial('abc')); 
    }   
}                          