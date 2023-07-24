<?php
session_start();   
if (!isset($_SESSION['userName'])) {  
     header("Location: logout.php");  
     die();  
}  
?>  
<!DOCTYPE html>  
<html>  
<head>  
     <meta charset="utf-8">  
     <meta name="viewport" content="width=device-width, initial-scale=1">  
     <title>Dashboard</title> 
     <link rel="stylesheet" href="style.css">  
</head>  
<body>  
<h2>Hello <?php echo $_SESSION['userName'] ?></h2>
<h2><a href="logout.php">Logout</a></h2>  
</body>  
</html>
