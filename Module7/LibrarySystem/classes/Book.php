<?php
require_once __DIR__ . "/LibraryItem.php";
require_once __DIR__ . "/../interfaces/Borrowable.php";
require_once __DIR__ . "/../traits/Logger.php";

final class Book extends LibraryItem implements Borrowable {

    use Logger;

    private $isBorrowed = false;

    public function borrow() {
        $this->isBorrowed = true;
        $this->log("Book borrowed");
    }

    public function returnItem() {
        $this->isBorrowed = false;
        $this->log("Book returned");
    }

    public function getDetails() {
        return "Book Title: " . $this->title;
    }

    public function __get($name) {
        return "Property '$name' not accessible";
    }
}
?>
