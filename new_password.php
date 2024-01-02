<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";
$showAlert = '';

$conn = mysqli_connect($servername, $username, $password, $database);


$update ="";
session_start();

$username = $_SESSION["login_username"];
 

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST['username']))
  $username_ = $_POST['username'];

   if(isset($_POST['password']))
   $password = $_POST['password'];

   if(isset($_POST['cpassword']))
   $cpassword = $_POST['cpassword'];

   $query = "select * from private where username='$username_' ";
   $result = mysqli_query($conn, $query);
 
   $num = mysqli_num_rows($result);
   if(($num == 0)||($username==$username_)) {

       if($password == $cpassword ){
        $password_ = password_hash($password, PASSWORD_BCRYPT);
    
        $sql = "UPDATE private SET password='$password_' WHERE username='$username' ";
    $result = mysqli_query($conn, $sql);

    $sql_1 = "UPDATE private SET username='$username_' WHERE username='$username' ";
    $result_1 = mysqli_query($conn, $sql_1);
    $sql_2= "UPDATE pictures SET username='$username_' WHERE username='$username' ";
    $result_2 = mysqli_query($conn, $sql_2);
    $sql_3 = "UPDATE `visual password` SET username='$username_' WHERE username='$username' ";
    $result_3 = mysqli_query($conn, $sql_3);
    if ($result) {
    //  echo "Record updated successfully";
    // header('location:ask.php');
    $_SESSION["login_username"] = $username_ ;  
    $showAlert = 'success';
  }
    } 
    
  else if( $password != $cpassword) {
    $showAlert = 'incorrectpassword';
  }
   }
   else if(($num >0) && ($username != $username_)) {

$showAlert='userexist';
   }
   else {
    //echo "<string> Error updating record: </strong>" . mysqli_error($conn);
    $update="error";
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
    <li ><a href="welcome.php">Home </a></li>
        <li ><a href="new_visual.php">New Graphical password</a></li>
        <li> <a href="new_password.php"> New Username-Password </a></li>
        <li> <a href="logout_.php"> Logout </a></li>
    </ul>
    <button><h1> Help ? </h1></button>
</div>

<?php  
if(!$conn){die("sorry, we failed to connect". mysqli_error($conn));}
else{echo"we are connected succesfully";} 
echo " ";
echo $username;
echo"<br>";
if($update=="done"){
  echo" Record updated successfully";
}
else if($update== "error"){
  echo "<strong> Error updating record: </strong> ." ;}
?>

<div class="container">
<h1>Enter your new Credentials</h1><br>
<form class = 'form' action = '' method="post" >
    
<div class="mb-3">
        <input type="text" class="form-control" id="username" name="username" placeholder="New Username" aria-describedby="emailHelp"  required>
      </div>
      <?php if($showAlert =='userexist'){
      echo 
         '<strong>Fail!</strong> username exist'   ;
       }?> 

      <div class="mb-3">
        <label for="password" class="form-label">_</label>
        <input type="password" class="form-control" id="password" name = "password" placeholder="New Password" required>
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
      <button type="submit" class="btn btn-primary" > CHANGE </button>

      <?php if($showAlert =='success'){
      echo "<br>";
         echo'<strong>SUCCESS!</strong> New Username-Password saved'   ;
       }?> 

    </form>
</div>
      
        
   
</body>
</html>

