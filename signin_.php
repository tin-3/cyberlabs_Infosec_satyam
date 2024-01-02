<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";
$showAlert = '';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){die("sorry, we failed to connect". mysqli_error($conn));}
else{"we are connected succesfully";
}

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(isset($_POST['username']))
    $username = $_POST['username'];
    $_SESSION["username"] = $_POST["username"];
    

   if(isset($_POST['password']))
   $password = $_POST['password'];

   if(isset($_POST['cpassword']))
   $cpassword = $_POST['cpassword'];


   
  $query = "select * from private where username='$username'";
  $result_1 = mysqli_query($conn, $query);

  $exist='true';

  $num = mysqli_num_rows($result_1);
  if($num == 0){
  $exist='false';
    
  }


       if(($password == $cpassword) && $exist=='false'){
        $password_ = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO `private` (`username`, `password`) VALUES ('$username' , '$password_');";
    $result = mysqli_query($conn, $sql);
    
 
    if($result){ 
       $showAlert = 'true';
       header('location:upload_.php');
    }
  }
    else if($exist=='true'){
      $showAlert = 'userexist';
    }

  else if(($exist== 'false') && ($password != $cpassword)) {
    $showAlert = 'incorrectpassword';
  }

}

?>


        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="login_.css" rel="stylesheet" type="text/css">
   
    
</head>


<body>
<div class="page" id="page1">
<div id="nav">
    <h1>LetsSecure</h1>
    <ul>
        <li><a href = "home_.php"> Home </a></li>
        <li><a href="signin_.php">Sign in</a></li>
        <li><a href="login_.php">Login</a></li>
    </ul>
    <button><h1> Help ? </h1></button>
</div>

<?php  
if(!$conn){die("sorry, we failed to connect". mysqli_error($conn));}
else{echo"we are connected succesfully";} ?>

<div class="container">
<h1>Signin here</h1><br>
<form class = 'form' action = '' method="post" >
      <div class="mb-3">
      <label for="username" class="form-label"></label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="emailHelp"  required>
      
 <?php  if($showAlert =='userexist'){
        echo 
           '<strong>Fail!</strong> Username already exists.';
         } ?>
    
      <div class="mb-3">
        <label for="password" class="form-label">_</label>
        <input type="password" class="form-control" id="password" name = "password" placeholder="Password" required>
        </div>
        <?php if($showAlert =='incorrectpassword'){
      echo 
         '<strong>Fail!</strong> Re-enter the password'   ;
       }?> 
       
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> _</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
      </div>
     
      
       <br>
      <button type="submit" class="btn btn-primary" >  SIGN IN </button>

    </form>
</div>
      
        
   
</body>
</html>

