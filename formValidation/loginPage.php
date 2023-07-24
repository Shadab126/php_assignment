<?php
session_start();
include('conn.php');
if (isset($_SESSION['userName'])) {
    header("Location: dashboard.php");
    die();
}
$msg = "";
if (isset($_POST['login'])) {

    $userName = $_POST['userName'];
    $pass = $_POST['pass'];


    $sql = "select * FROM userInfo WHERE userName='$userName' AND pass='$pass'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION["userName"] = $row['userName'];
            $_SESSION["userID"] = $row['userID'];
            header("Location: dashboard.php");
        }
    } else {
        $msg = "Please Enter Correct details";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
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
    <div class="container">
        <section class="main_container container d-flex flex-column justify-content-center align-items-center">
            <main class="form_main p-5 bg-dark-subtle">
                <h1>Login Form</h1>
                <p>Enter your details</p>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return validation()">
                    <div class="mb-4">
                        <div class="position-relative">
                            <label for="userName" class="form-label">userName</label>
                            <input type="text" id="userName" aria-describedby="userName" name="userName" class="form-control">
                            <span class="span1"></span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="position-relative">
                            <label for="pass" class="form-pass">password</label>
                            <input type="password" id="pass" aria-describedby="pass" name="pass" class="form-control">
                            <span class="span2"></span>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="login">Submit</button>
                    </div>
                    <?php echo $msg ?>
                </form>
            </main>

        </section>
    </div>
    <script src="validation.js"></script>
</body>

</html>