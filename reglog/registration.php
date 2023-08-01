<?php
include 'conn.php';
session_start();
if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $education = trim($_POST['education']);
    $address = trim($_POST['address']);
    $password = $_POST['password']; 
    $hashedPassword = md5($password );

    $sql = "insert into `register` (eName,email,education,address,epass)
    values('$name','$email','$education','$address','$hashedPassword')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        session_start();
        header('location: login.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<style>
    .form_main {
        width: 50%;
    }

    .main_container {
        height: 100vh;
    }

    .error {
        font-size: 0.7rem;
    }
</style>

<body>
    <section class="main_container container d-flex flex-column justify-content-center align-items-center">
        <main class="form_main p-5 bg-dark-subtle">
            <h1>Sign up</h1>
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" aria-describedby="name" name="name" class="form-control">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="pass" name="email" class="form-control">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="education" class="form-label">Education</label>
                        <input type="text" id="education" aria-describedby="education" name="education" class="form-control">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" aria-describedby="address" name="address" class='form-control'>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" id="pass" name="password" class='form-control'>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="register">Submit</button>
                </div>
            </form>
        </main>
    </section>
</body>

</html>