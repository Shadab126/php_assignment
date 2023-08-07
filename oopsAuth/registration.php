<?php
require 'DBConnection.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

$register = new Register();

if (isset($_POST["submit"])) {
  $result = $register->registration($name = $_POST["eName"], $email = $_POST["email"], $education = $_POST["education"], $address = $_POST["address"], $password = $_POST["ePass"], $confirmpassword = $_POST["confirmpassword"],);


  if ($result == 1) {
    echo
    // "<script> alert('Registration Successful'); </script>";
    '<div class="alert alert-success error-popup" role="alert">
  Registration Successful
</div>';
  } elseif ($result == 10) {
    echo
    // "<script> alert('Username or Email Has Already Taken'); </script>";
    '<div class="alert alert-danger error-popup" role="alert">
Username or Email Has Already Taken
</div>';
  } elseif ($result == 100) {
    echo
    // "<script> alert('Password Does Not Match'); </script>";
    '<div class="alert alert-danger error-popup" role="alert">
Password Does Not Match
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
  <title>Registration</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<style>
  .form_main {
    width: 100%;
    height: 100vh;
  }

  .form_main_div {
    width: 40%;
    height: 85vh;
  }

  .form_main_div>form {
    height: 95%;
  }

  .form_main_div>h2 {
    height: 5%;
  }

  .form_main_div>form>div {
    width: 100%;
  }

  .error-popup {
    font-size: 0.7rem;
    position: absolute;
    top: 5%;
    right: 5%;
  }
</style>

<body>

  <main class="form_main d-flex justify-content-center align-items-center flex-column">
    <div class="bg-info-subtle form_main_div">
      <h2 class="text-center pt-4">Sign up</h2>
      <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post" class="d-flex justify-content-xl-between align-items-center flex-column p-5">
        <div>
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" aria-describedby="name" name="eName" class="form-control">
        </div>
        <div>
          <label for="email" class="form-label">Email</label>
          <input type="email" id="pass" name="email" class="form-control">
        </div>
        <div>
          <label for="education" class="form-label">Education</label>
          <input type="text" id="education" aria-describedby="education" name="education" class="form-control">
        </div>
        <div>
          <label for="address" class="form-label">Address</label>
          <input type="text" id="address" aria-describedby="address" name="address" class='form-control'>
        </div>
        <div>
          <label for="pass" class="form-label">Password</label>
          <input type="password" id="pass" name="ePass" class='form-control'>
        </div>
        <div>
          <label for="pass" class="form-label">Confirm Password </label>
          <input type="password" id="pass" name="confirmpassword" class='form-control'>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </div>
        <div class="mt-3" style="text-decoration: none;">
        click the link for login <a href="login.php">Login</a>
        </div>
      </form>
    </div>
  </main>
</body>

</html>