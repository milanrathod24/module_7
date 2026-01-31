<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Image</h2>

<form method="post" enctype="multipart/form-data">
    Select Image:
    <input type="file" name="image" required><br><br>
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if (isset($_POST['upload'])) {

    $uploadDir = "uploads/";
    $fileName  = $_FILES['image']['name'];
    $fileTmp   = $_FILES['image']['tmp_name'];
    $fileSize  = $_FILES['image']['size'];
    $fileType  = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Allowed image types
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];

    // File type check
    if (!in_array($fileType, $allowedTypes)) {
        echo "<p style='color:red;'>Only JPG, JPEG, PNG & GIF images are allowed.</p>";
    }
    // File size check (max 2MB)
    elseif ($fileSize > 2 * 1024 * 1024) {
        echo "<p style='color:red;'>Image size must be less than 2MB.</p>";
    }
    else {
        if (move_uploaded_file($fileTmp, $uploadDir . $fileName)) {
            echo "<p style='color:green;'>Image uploaded successfully.</p>";
            echo "<img src='$uploadDir$fileName' width='200'>";
        } else {
            echo "<p style='color:red;'>Image upload failed.</p>";
        }
    }
}
?>

</body>
</html>
