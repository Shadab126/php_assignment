<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color: #fff; font-weight:600; margin-left:10rem">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 65rem;">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">
                                <i class="fa-solid fa-cart-shopping fa-beat" style="color: #fff; position: relative;">
                                <span class="badge badge-primary" style="position: absolute; top: -15px; right: -10px; border: .5px solid #ff6161; font-size:x-small; background-color:#ff6161">
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            $itemCount = count($_SESSION['cart']);
                                            echo $itemCount;
                                        }
                                        ?>
                                    </span>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php" style="font-weight:700; color:#fff">Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
</body>
</html>