<?php
// DRY    - Don't Repeat Yourself
// KISS   - Keep It Simple Stupid
// YAGNI  - You Ain't Gonna Need It
 
// Abstraction
class Calculator
{
    // Abstraction
    public static function add($a, $b)
    {
        // Implementation
        $result = $a + $b;
        return $result;
    }
    public static function subtract($a, $b)
    {
        return $a - $b;
    }
}

// API methods/functions
Calculator::add(10, 10);
Calculator::add(20, 20);