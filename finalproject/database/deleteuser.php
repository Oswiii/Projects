<?php
include '../connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `users` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        #echo "Data Deleted";
        header('location:admindisplay.php');
    }else{
        die(mysqli_error($con));
    }
}


?>