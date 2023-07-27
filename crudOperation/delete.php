<?php
include 'conn.php';
if(isset($_GET['deleteid'])){
    $sid=$_GET['deleteid'];

    $sql = "delete from `std_details` where Sid=$sid";
    $result=mysqli_query($con, $sql);
    if($result){
        // echo "Deleted succesfully";
        header("location: dashboard.php");
    }else{
        die(mysqli_error($con));
    }
}
?>