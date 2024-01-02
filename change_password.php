<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "credentials";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){die("sorry, we failed to connect". mysqli_error($conn));}
else{echo"we are connected succesfully";}

session_start();

$showAlert='';

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST['username']))
  $username = $_POST['username'];
  $_SESSION["login_username"] = $_POST["username"];
  

 if(isset($_POST['password']))
 $password = $_POST['password'];


  $query = "select * from private where username='$username' ";
  $result = mysqli_query($conn, $query);

  $num = mysqli_num_rows($result);
  if($num == 1){
  $row = mysqli_fetch_assoc($result);
      echo $row['password'];
     $verified =  password_verify($password, $row['password']);
      if($verified == 1){
  
    header("location:vis_3.php");
  }
  else{
    $showAlert = 'false';
}


  }
  else{
      $showAlert = 'false';
  }

}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LetsSecure</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="hm1.php">Home</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="signin.php">Sign in</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">Login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="change_password.php">CHANGE PASSWORD</a>
            </li>
          
           
          </ul>
         
        </div>
      </div>
    </nav>
    
    <!-- End Example Code -->
  </body>
</html>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    <?php

   if($showAlert =='false'){
      echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Fail!</strong> Wrong Username and Password.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" fdprocessedid="so4wt"></button>
       </div>';
       }
    ?>
    
    <!-- End Example Code -->
  </body>
</html>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <form action = '' method="post" >
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"  required>
       
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name = "password" required>
      </div>
      
       
      </div>
      <button type="submit" class="btn btn-primary" > NEXT </button>
    </form>
    
    <!-- End Example Code -->
  </body>
</html> 