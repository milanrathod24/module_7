<?php
class MathUtils {

    // Static property
    public static $pi = 3.14;

    // Static method
    public static function square($number) {
        return $number * $number;
    }

    // Static method accessing static property
    public static function circleArea($radius) {
        return self::$pi * $radius * $radius;
    }
}

// Access static property
echo "Value of PI: " . MathUtils::$pi . "<br>";

// Access static methods
echo "Square of 5: " . MathUtils::square(5) . "<br>";
echo "Area of circle (r=3): " . MathUtils::circleArea(3);
?>
