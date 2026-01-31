<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload File</h2>

<form method="post" enctype="multipart/form-data">
    Select File:
    <input type="file" name="file"><br><br>
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if (isset($_POST['upload'])) {

    $uploadDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $fileTmp = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Allowed file types
    $allowedTypes = array("jpg", "png", "pdf", "txt");

    if (!in_array($fileType, $allowedTypes)) {
        echo "<p style='color:red;'>Invalid file type.</p>";
    }
    elseif ($fileSize > 2 * 1024 * 1024) {
        echo "<p style='color:red;'>File size exceeds 2MB limit.</p>";
    }
    else {
        if (move_uploaded_file($fileTmp, $uploadDir . $fileName)) {
            echo "<p style='color:green;'>File uploaded successfully.</p>";
        } else {
            echo "<p style='color:red;'>File upload failed.</p>";
        }
    }
}
?>

</body>
</html>
