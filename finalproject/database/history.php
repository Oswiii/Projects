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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/search.css">
    
    <script> 
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>

</head>
<body>
<h1 style="margin: 2% ;">History</h1>    

<a href="admindisplay.php" style="position: fixed; right: 0; margin: -4% 5%;" >Go to User Page</a>    
<div class="container" style="overflow-y: scroll;overflow-x: hidden; height: 640px; max-width: 100%; margin-top: %;  border-top: 2px solid #000;">

<!-- Search bar -->
<form action="history.php" method="GET" id="search-form">
  <label>Search</label>
  <input type="text" id="search-values" name="search-values" placeholder="search..." value="<?php if(isset($_GET['search-values'])){echo $_GET['search-values'];}?>">
  <input type="submit" id="search" name="search" value="search">
  <input type="submit" id="close" name="close" value="Close Search" style="float: right;">
</form>

<table class="table">
  <thead>
    <tr style="background: #303030; color: #fff;">
       <th scope="col">ID</th>
      <th scope="col">User Id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Plate no.</th>
      <th scope="col">Time Duration</th>
      <th scope="col">Cost</th>
      <th scope="col">Lot #</th>
      <th scope="col">Year - Mon - Day | time</th>
      <th scope="col">Option</th>
      </tr>
  </thead>
  <tbody>

<?php

// Delete Data
  if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `history` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        #echo "Data Deleted";
        header('location:history.php');
    }else{
        die(mysqli_error($con));
    }
  }

// Search Data
  if (isset($_GET['search'])) {
    if (isset($_GET['search-values'])) {
      $getvalues = $_GET['search-values'];
      $searchquery = "SELECT * FROM history WHERE CONCAT(id,user_id,fullname,plate,timeduration,cost,lot,date) LIKE '%$getvalues%' ";
      $query_run = mysqli_query($con, $searchquery);

      if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $itemName) {
        echo '

        <form method="POST">
          <tr id="search-data">
            <th scope="row">'.$itemName['id'].'</th>
            <td>'.$itemName['user_id'].'</td>
            <td>'.$itemName['fullname'].'</td>
            <td>'.$itemName['plate'].'</td>
            <td>'.$itemName['timeduration'].'</td>
            <td>'.$itemName['cost'].'</td>
            <td>'.$itemName['lot'].'</td>
            <td>'.$itemName['date'].'</td>
            <td>
        </form>
        <form method="GET"> 
          <button class="btn btn-danger"><a href="history.php?deleteid='.$itemName['id'].'" class="text-light">Delete</a></button>    
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
    header('history.php');
  }
  //Display data
    $sql="SELECT * FROM `history`";
    $result=mysqli_query($con,$sql);
    
    if($result){
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $user_id=$row['user_id'];
          $fullname=$row['fullname'];
          $plate=$row['plate'];
          $cost=$row['cost'];
          $timeduration=$row['timeduration'];
          $lot=$row['lot'];
          $date=$row['date'];
     
          echo '<tr id="user-data">
          <th scope="row">'.$id.'</th>
          <td>'.$user_id.'</td>
          <td>'.$fullname.'</td>
          <td>'.$plate.'</td>
          <td>'.$timeduration.'</td>
          <td>'.$cost.'</td>
          <td>'.$lot.'</td>
          <td>'.$date.'</td>
          <td>
           <button class="btn btn-danger"><a href="history.php?deleteid='.$id.'" class="text-light">Delete</a></button>
          
          </tr>';
          
          echo "
            <style>
              tr:nth-of-type(odd) 
              {
                  background-color:#ccc;
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