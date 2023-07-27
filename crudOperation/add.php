<?php
include 'conn.php';


if (isset($_POST['login'])) {
    $sName = trim($_POST['Sname']);
    $sAddress = trim($_POST['Saddress']);
    $qualification = trim($_POST['qualification']);
    $city = trim($_POST['city']);
    $state = $_POST['state']; // Get the date of birth from the form
    $country = $_POST['country'];
   
        $sql = "insert into `std_details` (Sname,Saddress,qualification,city,state,country)
    values('$sName','$sAddress','$qualification','$city','$state','$country')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header('location: dashboard.php');
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
    <title>Inset opr</title>
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
        <main class="form_main p-5 bg-info-subtle">
            <h1>Insert the details</h1>
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="Sname" class="form-label">Name</label>
                        <input type="text" id="Sname" name="Sname" class='form-control'>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="Saddress" class="form-label">Address</label>
                        <input type="text" id="Saddress" aria-describedby="Saddress" name="Saddress" class='form-control'>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="qualification" class="form-label">Qualification</label>
                        <input type="text" id="qualification" name="qualification" class='form-control'>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="city" class="form-label">City</label>
                        <input type="text" id="city" name="city" class='form-control'>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="state" class="form-label">State</label>
                        <input type="text" id="state" name="state" class='form-control'>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" id="country" name="country" class='form-control'>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="login">Submit</button>
                </div>
            </form>
        </main>
    </section>
</body>

</html>