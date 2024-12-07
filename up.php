<?php
include('config.php');

if (isset($_POST['update'])) {
    // التحقق من وجود الحقول
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $price = isset($_POST['price']) ? $_POST['price'] : null;

    if ($_FILES['image']['error'] === 0) {
        $imageName = $_FILES['image']['name'];
        $tempName = $_FILES['image']['tmp_name'];
        move_uploaded_file($tempName, "images/$imageName");
    } else {
        echo "Error uploading image.";
        exit;
    }

    if ($id && $name && $price) {
        $query = "UPDATE prod SET name='$name', price='$price', image='images/$imageName' WHERE id='$id'";
        if (mysqli_query($con, $query)) {
            echo "Product updated successfully!";
        } else {
            echo "SQL Error: " . mysqli_error($con);
        }
    } else {
        echo "All fields are required!";
    }
    header("location:products.php");
}
?>
