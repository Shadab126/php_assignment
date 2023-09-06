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
        "id" => 4,
        "name" => "Nike fear of god",
        "price" => 15.49,
        "image" => "https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fwp-content%2Fblogs.dir%2F6%2Ffiles%2F2019%2F07%2Fnike-fear-of-god-moccasin-pink-0.jpg?w=960&cbr=1&q=90&fit=max"
    ),
);

if (isset($_POST['add_to_cart']) && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Initialize cart if not exists
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add product to cart
    if (array_key_exists($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
}

// increase quantity functionality
if (isset($_POST['increase_quantity'])) {
    $product_id = $_POST['product_id'];
    if (array_key_exists($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][$product_id]++;
    }
}

// decrease quantity functionality
if (isset($_POST['decrease_quantity'])) {
    $product_id = $_POST['product_id'];
    if (array_key_exists($product_id, $_SESSION['cart'])) {
        if ($_SESSION['cart'][$product_id] > 1) {
            $_SESSION['cart'][$product_id]--;
        } else {
            // delete the item from the cart if quantity is less than 1
            unset($_SESSION['cart'][$product_id]);
        }
    }
}

// delete functionality
if (isset($_POST['delete_item'])) {
    $product_id = $_POST['product_id'];
    if (array_key_exists($product_id, $_SESSION['cart'])) {
        unset($_SESSION['cart'][$product_id]);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'header.php'; ?>
    <section class="container">
        <main class="p-5">
            <h1>Cart</h1>
            <button class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="index.php">Back to Shopping</a></button>
            <table class="table  mt-4">
                <thead class="table" style="background-color: black; color: #fff">
                    <tr>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Remove</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $product_id => $quantity) {
                    $product = $products[$product_id - 1];
                    $subtotal = $product['price'] * $quantity;
                    $total += $subtotal;
                ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="50"></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td>
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                <button type="submit" name="decrease_quantity" class="btn btn-sm btn-outline-primary">-</button>
                                <?php echo $quantity; ?>
                                <button type="submit" name="increase_quantity" class="btn btn-sm btn-outline-primary">+</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                <button type="submit" name="delete_item" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can fa-flip"></i></button>
                            </form>
                        </td>
                        <td>$<?php echo $subtotal; ?></td>
                    </tr>
                <?php }; ?>
                <tr>
                    <td colspan="5">Total</td>
                    <td>$<?php echo $total; ?></td>
                </tr>
            </table>
        </main>
    </section>
</body>

</html>