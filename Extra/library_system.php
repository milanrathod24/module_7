<?php
// Interface (Abstraction)
interface TransactionInterface {
    public function process();
}

// Base class (Encapsulation)
class Book {
    private $title;
    private $author;

    public function __construct($title, $author) {
        $this->title  = $title;
        $this->author = $author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
}

// Inheritance
class User {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Transaction class (Polymorphism + Type Hinting)
class Transaction implements TransactionInterface {

    private $user;
    private $book;

    public function __construct(User $user, Book $book) {
        $this->user = $user;
        $this->book = $book;
    }

    // Implement interface method
    public function process() {
        echo $this->user->getName() . " borrowed the book: " .
             $this->book->getTitle() . " by " .
             $this->book->getAuthor();
    }

    // Destructor
    public function __destruct() {
        // cleanup if needed
    }
}

// Create objects
$user = new User("Milan");
$book = new Book("PHP OOP", "John Doe");
$transaction = new Transaction($user, $book);

// Process transaction
$transaction->process();
?>
