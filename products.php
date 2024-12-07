<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="index.css">
    <center><h2>admin page</h2></center>
    
</head>
<body>
    <div class="products-container" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
        <?php
        include('config.php');
        $result = mysqli_query($con, "SELECT * FROM prod");
        while ($row = mysqli_fetch_array($result)) {
            echo "
            <div class='card'>
                <img src='$row[image]' alt='$row[name]' style='width: 100%; border-radius: 10px 10px 0 0;'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>Price: $$row[price]</p>
                    <a href='edit.php?id=$row[id]' class='btn btn-primary'>Edit</a>
                    <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a>
                </div>
            </div>";
        }
        ?>
    </div>
</body>
</html>
