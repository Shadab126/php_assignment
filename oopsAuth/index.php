<?php
require 'DBConnection.php';

$select = new Select();

if (!empty($_SESSION["id"])) {
  $user = $select->selectUserById($_SESSION["id"]);
} else {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
  <section class="container">
    <main class="p-5">
      <button class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="logout.php">Logout</a></button>
      <table class="table table-striped mt-4">
        <thead class="table bg-secondary text-light">
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Education</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
          <?php
           echo 
          ' <tr>
              <td>' . $user['id']  . '</td>
              <td>' . $user['eName']  . '</td>
              <td>' . $user['email'] . '</td>
              <td>' . $user['education'] . '</td>
              <td>' . $user['address'] . '</td>
             </tr>';
          ?>
        </tbody>
      </table>
    </main>
  </section>
</body>

</html>