<?php
class FileHandler {
    public $fileName;

    // Constructor
    public function __construct($fileName) {
        $this->fileName = $fileName;
        echo "Opening file: " . $this->fileName . "<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Closing file: " . $this->fileName . "<br>";
    }
}

// Create object
$file = new FileHandler("data.txt");

// Object destroyed manually
unset($file);

echo "Script execution completed.";
?>
