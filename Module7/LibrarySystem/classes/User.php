<?php
require_once __DIR__ . "/../interfaces/Borrowable.php";

class User {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrowBook(Borrowable $item) {
        $item->borrow();
    }
}
?>
