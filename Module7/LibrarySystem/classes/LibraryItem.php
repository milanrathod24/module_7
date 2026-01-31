<?php
abstract class LibraryItem {

    protected $title;

    public function __construct($title) {
        $this->title = $title;
    }

    abstract public function getDetails();
}
?>
