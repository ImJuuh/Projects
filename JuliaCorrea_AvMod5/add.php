x<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add New Product</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="productName">Product Name:</label>
        <input type="text" name="productName" required>

        <label for="productPrice">Product Price ($):</label>
        <input type="number" step="0.01" name="productPrice" required>

        <label for="productImage">Product Image:</label>
        <input type="file" name="productImage"  required>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data when the form is submitted

    // Validate and sanitize inputs
    $productName = htmlspecialchars($_POST["productName"]);
    $productPrice = floatval($_POST["productPrice"]);

    // Handle image upload
    $targetDirectory = "uploads/";  // Create an "uploads" directory in your project
    $targetFile = $targetDirectory . basename($_FILES["productImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["productImage"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["productImage"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
            // Image uploaded successfully
            // Add the product information to your data storage (e.g., database)

            // Placeholder for saving to a database or file
            // You need to implement the actual saving mechanism
            // For simplicity, this example just displays the product information
            echo "Product added successfully:<br>";
            echo "Name: " . $productName . "<br>";
            echo "Price: $" . $productPrice . "<br>";
            echo "Image: <img src='" . $targetFile . "' alt='" . $productName . "'>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>


