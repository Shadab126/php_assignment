<?php
session_start();
$products = array(
    array(
        "id" => 1,
        "name" => "Nike Jordan",
        "price" => 10.99,
        "image" => "https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/11/product_photography_tips_4.jpg?resize=1500%2C1001&ssl=1"
    ),
    array(
        "id" => 2,
        "name" => "Nike Rock",
        "price" => 20.99,
        "image" => "https://www.cutoutimage.com/wp-content/uploads/2022/02/How-to-Take-Pictures-of-Shoes-to-Sell-scaled.webp"
    ),
    array(
        "id" => 3,
        "name" => "Nike fear of god",
        "price" => 15.49,
        "image" => "https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fwp-content%2Fblogs.dir%2F6%2Ffiles%2F2019%2F07%2Fnike-fear-of-god-moccasin-pink-0.jpg?w=960&cbr=1&q=90&fit=max"
    ),
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Listing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>

<?php include 'header.php'; ?>

    <section class="container">

    <main class="p-5 mt-4">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <p class="card-text">$<?php echo $product['price']; ?></p>
                                <form method="post" action="cart.php">
                                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                    <button class="btn btn-primary" type="submit" name="add_to_cart" value="Add to Cart">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
        </main>
    </section>
</body>

</html>