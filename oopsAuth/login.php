<?php
require 'DBConnection.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

$login = new Login();

if (isset($_POST["submit"])) {
  $result = $login->login($usernameemail = $_POST["usernameemail"], $password = $_POST["ePass"]);

  if ($result == 1) {
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  } elseif ($result == 10) {
    echo
    '<div class="alert alert-danger error-popup" role="alert">
    Wrong Password
    </div>';
  } elseif ($result == 100) {
    echo
    '<div class="alert alert-danger error-popup" role="alert">
    User Not Registered
    </div>';
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
  .error-popup {
    font-size: 0.7rem;
    position: absolute;
    top: 5%;
    right: 5%;
  }
</style>

<body>
  <div class="container">
    <section class="main_container container d-flex flex-column justify-content-center align-items-center">
      <main class="form_main p-5 bg-info-subtle">
        <h1>Login Form</h1>
        <p>Enter your details</p>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="mb-4">
            <div class="position-relative">
              <label for="usernameemail" class="form-label">Username or Email</label>
              <input type="text" id="pass" name="usernameemail" class="form-control">
            </div>
          </div>
          <div class="mb-4">
            <div class="position-relative">
              <label for="pass" class="form-label">Password</label>
              <input type="password" id="pass" name="ePass" class='form-control'>
            </div>
          </div>
          <div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
          </div>
          <div class="mt-2">
            <!-- <a href="registration.php">registration</a> -->
           click the link for registration <a href="registration.php">Registration</a>
          </div>
        </form>
      </main>

    </section>
  </div>
</body>

</html>