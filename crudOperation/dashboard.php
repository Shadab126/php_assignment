<?php
include 'conn.php';
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
            <button class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="add.php">Add User</a></button>
            <table class="table table-striped mt-4">
                <thead class="table bg-secondary text-light">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Qaulification</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Country</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from  `std_details`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            $sid = $row['Sid'];
                            $sName = $row['Sname'];
                            $sAddress = $row['Saddress'];
                            $qualification = $row['qualification'];
                            $city = $row['city'];
                            $state = $row['state'];
                            $country = $row['country'];
                           
                            echo ' <tr>
                            <th scope="row">' . $sid . '</th>
                            <td>' . $sName . '</td>
                            <td>' . $sAddress . '</td>
                            <td>' . $qualification . '</td>
                            <td>' . $city . '</td>
                            <td>' . $state . '</td>
                            <td>' . $country . '</td>
                            <td>
                            <button class="btn btn-primary"><a style="text-decoration: none;"  href="update.php?id=' . $sid . '"class="text-light">Upadate</a></button>
                            <button class="btn btn-danger"><a style="text-decoration: none;"  href="delete.php? deleteid=' . $sid . '"
                             class="text-light">Delete</a></button>
        
                        </td>
                            </tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>
        </main>
    </section>
</body>

</html>