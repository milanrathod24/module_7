<?php
class Book {

    private $title;
    private $author;
    private $price;

    // Constructor
    public function __construct($title, $author, $price) {
        $this->title  = $title;
        $this->author = $author;
        $this->price  = $price;
    }

    // Method to apply discount
    public function applyDiscount($discountPercent) {
        $discountAmount = ($this->price * $discountPercent) / 100;
        $newPrice = $this->price - $discountAmount;
        return $newPrice;
    }

    // Getter methods
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Create object
$book = new Book("PHP Programming", "John Doe", 500);

// Apply discount
$newPrice = $book->applyDiscount(10);

// Display result
echo "Book Title: " . $book->getTitle() . "<br>";
echo "Author: " . $book->getAuthor() . "<br>";
echo "Original Price: 500<br>";
echo "Price after Discount: " . $newPrice;
?>
