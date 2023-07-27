<?php
error_reporting(0);
include 'conn.php';
$sid = $_REQUEST['id'];
$sql = "select * from `std_details` where Sid=$sid";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$sName = $row['Sname'];
$sAddress = $row['Saddress'];
$qualification = $row['qualification'];
$city = $row['city'];
$state = $row['state'];
$country = $row['country'];

if (isset($_POST['update'])) {
    $sid = $_REQUEST["id"];
    $sName = trim($_POST['Sname']);
    $sAddress = trim($_POST['Saddress']);
    $qualification = trim($_POST['qualification']);
    $city = trim($_POST['city']);
    $state = $_POST['state'];
    $country = $_POST['country'];

    echo $sql = "UPDATE `std_details` SET Sname='".$sName."',Saddress='".$sAddress."',qualification='".$qualification."',city='".$city."',state='".$state."',country='".$country."' where Sid=$sid";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("location:dashboard.php");
        // echo "Updated succesfully";
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
        <main class="form_main p-5 bg-info-subtle">

            <h1>Update the deatails</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?=$sid ?>" method="post">
                <!-- <input type="hidden" value="<?php echo $id; ?>"> -->
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" aria-describedby="name" name="Sname" class='form-control' value="<?php echo $sName; ?>" />
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" aria-describedby="emailHelp" name="Saddress" class='form-control' value="<?php echo $sAddress; ?>">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="qual" class="form-label">Qaulification</label>
                        <input type="text" id="qual" name="qualification" class='form-control' value="<?php echo $qualification; ?>">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="city" class="form-label">City</label>
                        <input type="text" id="city" name="city" class='form-control' value="<?php echo $city; ?>">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="state" class="form-label">State</label>
                        <input type="text" id="state" name="state" class='form-control' value="<?php echo $state ?>">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" id="country" name="country" class='form-control' value="<?php echo $country ?>">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="update">Submit</button>
                </div>
            </form>
        </main>
    </section>
</body>

</html>