<?php
require_once __DIR__ . "/classes/Book.php";
require_once __DIR__ . "/classes/User.php";

$user = new User("Milan");
$book = new Book("PHP OOP Concepts");

echo $book->getDetails() . "<br>";

$user->borrowBook($book);
$book->returnItem();

echo $book->author;
?>
