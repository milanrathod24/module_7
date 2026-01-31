<?php
class Counter {

    // Static property
    private static $count = 0;

    // Constructor
    public function __construct() {
        self::$count++;   // scope resolution operator
    }

    // Static method
    public static function getCount() {
        return self::$count;
    }
}

// Create objects
$obj1 = new Counter();
$obj2 = new Counter();
$obj3 = new Counter();

// Access static method using scope resolution operator
echo "Total objects created: " . Counter::getCount();
?>
