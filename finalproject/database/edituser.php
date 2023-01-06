<?php

include '../connection.php';
$id=$_GET['updateid'];
$sql="Select * from `users` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
        $user_name=$row['user_name'];
        $fullname=$row['fullname'];
        $email=$row['email'];
        $password=$row['password'];
        $mobile=$row['mobile'];
        $address=$row['address'];
        $plate=$row['plate'];


if(isset($_POST['submit'])){
    $user_name=$_POST['user_name'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $plate=$_POST['plate'];

    $sql="update `users` set id=$id,user_name='$user_name',fullname='$fullname',email='$email',password='$password',mobile='$mobile',address='$address',plate='$plate'where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:admindisplay.php');
        echo "Data Updated";
    }else{
        die(mysqli_error($con));
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Registration</title>
</head>
  <body>  

  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control"placeholder="Enter Username" name="user_name" value=<?php echo $user_name;?>>
      </div>
    <div class="form-group">
      <label>Name</label>
      <input type="name" class="form-control"placeholder="Enter Your Name" name="fullname" value=<?php echo $fullname;?>>
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control"placeholder="Enter Your Email" name="email" value=<?php echo $email;?>>
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control"placeholder="Enter Desired Password" name="password" value=<?php echo $password;?>>
    </div>
  
    <div class="form-group">
      <label>Mobile</label>
      <input type="text" class="form-control"placeholder="Enter Mobile Number" name="mobile" value=<?php echo $mobile;?>>
    </div>

    <div class="form-group">
      <label>Address</label>
      <input type="text" class="form-control"placeholder="Enter Username" name="address" value=<?php echo $address;?>>
    </div>

    <div class="form-group">
      <label>Plate Number</label>
      <input type="text" class="form-control"placeholder="Enter Car Plate Number" name="plate" value=<?php echo $plate;?>>
    </div>
 
    <button type="submit" class="btn btn-primary"name="submit">Update</button>
  </form> 
</div>

</body>
</html>