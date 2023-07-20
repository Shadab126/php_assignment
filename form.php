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
            <h1>User details</h1>
            <form action="viewPage.php" method="post">
                <input type="hidden">
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="Firstname" class="form-label">Name</label>
                        <input type="text" id="Firstname" aria-describedby="name" name="Firstname" class="form-control">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="position-relative">
                        <label for="Lastname" class="form-label">Lastname</label>
                        <input type="text" id="Lastname" aria-describedby="emailHelp" name="Lastname" class="form-control">
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
                        <label for="Phone_no" class="form-label">Phone</label>
                        <input type="number" id="Phone_no" name="Phone_no" class="form-control">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="login">Submit</button>
                </div>
            </form>
        </main>
    </section>
</body>

</html>