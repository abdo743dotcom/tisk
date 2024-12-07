<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
include('config.php');
$ID =$_GET['id'];
$up = mysqli_query ($con,"select * from prod where id =$ID");
$data =mysqli_fetch_array($up);
?>
    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
            <h1>edit to Bamizon</h1>
            <input type="text" name="id" value='<?php echo $data['id']?>' placeholder="id " required><br>
            <input type="text" name="name" value='<?php echo $data['name']?>' placeholder="Product Name" required><br>
            <input type="text" name="price"  value='<?php echo $data['price']?>' placeholder="Product Price" required><br>
            <input type="file" id="file" name="image" style="display:none;" required>
            <label for="file">تحديث </label><br>
            <button name="update">تعديل</button>
            <br><br>
            <a href="products.php">View All Products</a>
            <p>Developed by abdo</p>
        </form>
    </div>
</body>
</html>