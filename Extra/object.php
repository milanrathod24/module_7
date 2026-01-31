<?php
class Book {

    private $title;
    private $author;
    private $price;

    public function __construct($title, $author, $price) {
        $this->title  = $title;
        $this->author = $author;
        $this->price  = $price;
    }

    public function applyDiscount($percent) {
        return $this->price - ($this->price * $percent / 100);
    }

    public function getDetails() {
        return "
        <tr>
            <td>{$this->title}</td>
            <td>{$this->author}</td>
            <td>{$this->price}</td>
        </tr>";
    }
}

// Create multiple Book objects
$book1 = new Book("PHP Basics", "John Doe", 500);
$book2 = new Book("OOP in PHP", "Jane Smith", 700);
$book3 = new Book("Web Development", "Alex Brown", 600);

// Display books in table format
echo "<h2>Book Details</h2>";
echo "<table border='1' cellpadding='5'>
<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Price</th>
</tr>";

echo $book1->getDetails();
echo $book2->getDetails();
echo $book3->getDetails();

echo "</table>";

// Demonstrate method usage
echo "<br>Discounted Price of PHP Basics (10% off): ";
echo $book1->applyDiscount(10);
?>
