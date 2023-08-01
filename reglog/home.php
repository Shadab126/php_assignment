
<?php
session_start();
include 'conn.php';
if (!isset($_SESSION['id'])) {
     header("Location: logout.php");
     die();
}
?>
<!DOCTYPE html>
<html lang="en">

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
                              <th scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                        $sql = "select * from  `register` where id= '{$_SESSION['id']}'";
                         $result = mysqli_query($con, $sql);
                         $row = mysqli_fetch_assoc($result);
               
                                  
                                   echo ' <tr>
                            <th scope="row">' . $row['id']  . '</th>
                            <td>' . $row['eName'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['education'] . '</td>
                            <td>' . $row['address'] . '</td>
                            <td>
                            <button class="btn btn-primary"><a style="text-decoration: none;"  href="edit.php?id=' . $_SESSION['id'] . '"class="text-light">Edit Profile</a></button>
                        </td>
                            </tr>';
               
                         ?>
                    </tbody>
               </table>
          </main>
     </section>
</body>

</html>