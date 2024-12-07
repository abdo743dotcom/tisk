<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bamizon Shop</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="cart-animation">
        <img src="cart.png" alt="" style="width: 100%;">
    </div>
    <h1 class="welcome">مرحبا بك في Bamizon!</h1>
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h1>Welcome to Bamizon</h1>
            <input type="text" name="name" placeholder="Product Name" required><br>
            <input type="text" name="price" placeholder="Product Price" required><br>
            <input type="file" id="file" name="image" style="display:none;" required>
            <label for="file">Upload Image</label><br>
            <button name="upload">Upload ✅</button>
            <br><br>
            <a href="products.php">View All Products</a>
            <p>Developed by abdo</p>
        </form>
    </div>
</body>
</html>
