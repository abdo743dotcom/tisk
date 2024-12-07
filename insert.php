<?php
include('config.php');

if(isset($_POST['upload'])){
    if(isset($_FILES['image']['name']) && isset($_POST['name']) && isset($_POST['price'])){
        $NAME = $_POST['name'];
        $PRICE = $_POST['price'];
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_up = "images/".$image_name;

        $insert = "INSERT INTO prod (name, price, image) VALUES ('$NAME', '$PRICE', '$image_up')";

        if(mysqli_query($con, $insert)){
            if(move_uploaded_file($image_location, $image_up)){
                echo "<script>alert('The product has been successfully uploaded')</script>";
            } else {
                echo "<script>alert('Error uploading image')</script>";
            }
        } else {
            echo "<script>alert('Error in database query')</script>";
        }
    } else {
        echo "<script>alert('Please fill all the fields and upload an image')</script>";
    }

    header('location: index.php');
}
?>
