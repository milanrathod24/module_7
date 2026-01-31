<!DOCTYPE html>
<html>
<head>
    <title>File Upload and Read</title>
</head>
<body>

<h2>Upload a File</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile" required><br><br>
    <input type="submit" name="upload" value="Upload File">
</form>

<?php
if (isset($_POST['upload'])) {

    try {
        $uploadDir = "uploads/";
        $fileName = basename($_FILES['myfile']['name']);
        $fileTmp  = $_FILES['myfile']['tmp_name'];

        // Check if file selected
        if (empty($fileName)) {
            throw new Exception("No file selected.");
        }

        // Upload file
        if (!move_uploaded_file($fileTmp, $uploadDir . $fileName)) {
            throw new Exception("File upload failed.");
        }

        echo "<p style='color:green;'>File uploaded successfully.</p>";

        // Read file content
        $content = file_get_contents($uploadDir . $fileName);

        if ($content === false) {
            throw new Exception("Unable to read file.");
        }

        echo "<h3>File Content:</h3>";
        echo "<pre>$content</pre>";

    } catch (Exception $e) {
        echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
    }
}
?>

</body>
</html>
