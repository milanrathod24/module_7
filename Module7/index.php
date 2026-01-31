<?php
$filename = "data.txt";

// Check if file exists
if (file_exists($filename)) {

    // Open file
    $file = fopen($filename, "r");

    // Read file
    $content = fread($file, filesize($filename));

    // Close file
    fclose($file);

    // Show content on browser
    echo nl2br($content);

} else {
    echo "File not found.";
}
?>
