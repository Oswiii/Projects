<?php
include '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Display</title>
    <link rel="stylesheet" type="text/css" href="../styles/search.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 style="margin: 2% ;">Users</h1>    

<a href="history.php" style="position: fixed; right: 0; margin: -4% 5%;" >Go to History Page</a>    
<div class="container" style="overflow-y: scroll;overflow-x: hidden; height: 640px; max-width: 100%; margin-top: %;  border-top: 2px solid #000;">

<!-- Search bar -->
<form action="admindisplay.php" method="GET" id="search-form">
  <label>Search</label>
  <input type="text" id="search-values" name="search-values" placeholder="search..." value="<?php if(isset($_GET['search-values'])){echo $_GET['search-values'];}?>">
  <input type="submit" id="search" name="search" value="search">
  <input type="submit" id="close" name="close" value="Close Search" style="float: right;">
</form>

<table class="table">
  <thead>
    <tr style="background: #303030; color: #fff;">
      <th scope="col">UserID</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Plate No.</th>
      <th scope="col">Date of Register</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>

<?php

// Search Data
  if (isset($_GET['search'])) {
    if (isset($_GET['search-values'])) {
      $getvalues = $_GET['search-values'];
      $searchquery = "SELECT * FROM users WHERE CONCAT(id,user_id,user_name,fullname,email,password,mobile,address,plate,date) LIKE '%$getvalues%' ";
      $query_run = mysqli_query($con, $searchquery);

      if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $itemName) {
        echo '

        <form method="POST">
          <tr id="search-data">
            <td>'.$itemName['user_id'].'</td>
            <td>'.$itemName['user_name'].'</td>
            <td>'.$itemName['fullname'].'</td>
            <td>'.$itemName['email'].'</td>
            <td>'.$itemName['password'].'</td>
            <td>'.$itemName['mobile'].'</td>
            <td>'.$itemName['address'].'</td>
            <td>'.$itemName['plate'].'</td>
            <td>'.$itemName['date'].'</td>
            <td>
        </form>
        <form method="GET"> 
            <button class="btn btn-primary"><a href="edituser.php?updateid='.$itemName['id'].'"class="text-light" >Edit<a/></button>
          <button class="btn btn-danger"><a href="admindisplay.php?deleteid='.$itemName['id'].'" class="text-light">Delete</a></button>    
          </tr>
        </form>

        <style>
          tr:nth-of-type(odd) 
          {
            background-color:#ccc;
          }
        </style>
        <script>
          document.getElementById("search").onclick = function(){
            document.getElementById("user-data").style.display = "none";
          };
        </script>
        ';
        }
      }
      else{
        echo "
        <tr style=' color: red; position: absolute; width: 97%;'>
          <th style='font-size: 24px; letter-spacing: 2px;'>No $getvalues</th>
        </tr>
         ";
      }
    }
    die;
  }
  //close search data
  if (isset($_GET['close'])) {
    header('admindisplay.php');
  }
//Display Data
  $sql="SELECT * FROM `users`";
  $result=mysqli_query($con,$sql);
  
  if($result){
    while($row=mysqli_fetch_assoc($result)){

        $id=$row['id'];
        $user_id=$row['user_id'];
        $user_name=$row['user_name'];
        $fullname=$row['fullname'];
        $email=$row['email'];
        $password=$row['password'];
        $mobile=$row['mobile'];
        $address=$row['address'];
        $plate=$row['plate'];
        $date=$row['date'];
        echo '<tr>
        <td>'.$user_id.'</td>
        <td>'.$user_name.'</td>
        <td>'.$fullname.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$mobile.'</td>
        <td>'.$address.'</td>
        <td>'.$plate.'</td>
        <td>'.$date.'</td>
        
        <td>
        <button class="btn btn-primary"><a href="edituser.php?updateid='.$id.'"
        class="text-light">Edit<a/></button>
        <button class="btn btn-danger"><a href="deleteuser.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        </tr>';
      
        echo "
          <style>
            tr:nth-of-type(odd) 
            {
                background-color:#ccc;
            }
            .btn a{
              position absolute;
              padding: 10px 0;
            }
          </style>
        ";


    }
         echo "<script> alert(Cant Fetch the date);</script>";
 
  }else{
      echo "<script> alert(Cant Fetch the date);</script>";
  }
 
?>
  
</body>
</html>