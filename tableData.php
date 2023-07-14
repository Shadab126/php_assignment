<?php
$employees = [
    [1, 'Shadab', 'Ansari', 24, 'RGT', 'Software Engineer', 'Developer', 20000, 2000, 200],
    [2, 'Rocky', 'Ansari', 24, 'RGT', 'Software Engineer', 'Developer', 25000, 2500, 200],
    [2, 'Bicky', 'Ansari', 20, 'RGT', 'Software Engineer', 'Developer', 22000, 2200, 200],
];

function calculateNetSalary($salary, $pf, $tax)
{
    $netSalary = $salary - $pf - $tax;
    return $netSalary;
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
            <table class="table table-striped-columns mt-4">
                <thead class="table">
                    <tr>
                        <th scope="col">EmployeeId</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Age</th>
                        <th scope="col">Company</th>
                        <th scope="col">Role</th>
                        <th scope="col">Department</th>
                        <th scope="col">Salary</th>
                        <th scope="col">pfContribution</th>
                        <th scope="col">iTax</th>
                        <th scope="col">NetSalary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($employees as $employee) {
                        $id = $employee[0];
                        $firstName = $employee[1];
                        $lastName = $employee[2];
                        $age = $employee[3];
                        $company = $employee[4];
                        $role = $employee[5];
                        $department = $employee[6];
                        $salary = $employee[7];
                        $pf = $employee[8];
                        $tax = $employee[9];
                        $netSalary = calculateNetSalary($salary, $pf, $tax);

                        echo '<tr>';
                        echo '<td>' . $id . '</td>';
                        echo '<td>' . $firstName . '</td>';
                        echo '<td>' . $lastName . '</td>';
                        echo '<td>' . $age . '</td>';
                        echo '<td>' . $company . '</td>';
                        echo '<td>' . $role . '</td>';
                        echo '<td>' . $department . '</td>';
                        echo '<td>' . $salary . '</td>';
                        echo '<td>' . $pf . '</td>';
                        echo '<td>' . $tax . '</td>';
                        echo '<td>' . $netSalary . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </section>
</body>

</html>