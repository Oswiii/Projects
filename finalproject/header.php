
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parking Guide and Monitoring Systen</title>
    <?php require('links.php');?>
  
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
  
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
</head>

<!--nav -->
<span style="margin-top: 10px">PROJECT (2022-2023)</span>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 shadow-sm sticky-top">
  <div class="container-fluid px-lg-4 mt-4">
    <img src="images/icon.png" style="margin: -10px; width: 110px; height: 100px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="index.php #parking-map">Parking Area</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="userinfo.php">myAcoount</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="index.php #reach-us">Contact Us</a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link me-2" href="index.php #about">About</a>
        </li>

      </ul>
      
      <span style="margin-right: 10px; letter-spacing: 2px; text-transform: uppercase;">
        <?php echo $user_data['fullname']; ?>
      </span>
      
      <div class="d-flex">
        <a href="logout.php" class="btn btn-outline-dark shadow-none me-lg-3 me-2" style="text-decoration: none; padding: 10px;">Logout</a>
      </div>
    </div>
  </div>
</nav>
<!--End nav -->


<!-- LoginModal -->
<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      
      <form method="POST">
        <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center " >
          <i class="bi bi-car-front fs-3 me-2"></i>User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
         <label  class="form-label">Username</label>
         <input type="text" name="loginUsername" class="form-control shadow-none" >
        </div>
        <div class="mb-4">
         <label  class="form-label">Password</label>
         <input type="Password" name="loginPassword" class="form-control shadow-none" >
        </div>
   
         <div class="d-flex align-items-center justify-content-between mb-2">
      <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
      <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
     </div>
    </div>
      </form>
      
    </div>
  </div>
</div>
<!-- End LoginModal -->


<!-- RegisterModal -->
<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <form method="POST">
        <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center " ><i class="bi bi-car-front-fill fs-3 me-2"></i>User Registration</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Please inout valid information.</span>

        <div class="row">
          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Name</label><input type="text" name="name" class="form-control shadow-none" required>
          </div>

          <div class="col-md-6 ps-0">
            <label class="form-label">Email</label><input type="email" name="email" class="form-control shadow-none" required>
          </div>

          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Phone Number</label><input type="number" name="mobile" class="form-control shadow-none" required>
          </div>

          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Address</label><input type="text" name="address" class="form-control shadow-none" required>
          </div>

          <div class="col-md-6 ps-0">
            <label class="form-label">Plate No</label><input type="text" name="plate" class="form-control shadow-none" required>
          </div>

          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">User Name</label><input type="text" name="username" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 ps-0">
            <label class="form-label">Password</label><input type="Password" name="password" class="form-control shadow-none" required>
          </div>
        </div>

        <div class="text-center my-1">
          <button type="submit" name="registerBTN" class="btn btn-dark shadow-none">Register</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>

</html>




