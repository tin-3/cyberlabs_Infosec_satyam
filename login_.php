<?php
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";

$conn = mysqli_connect($servername, $username, $password, $database);


$sql_2= "SELECT username, time FROM blocked";
$result_2 = mysqli_query($conn, $sql_2);

if (mysqli_num_rows($result_2) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result_2)) {
   // echo " - Name: " . $row["username"]. "time:".$row["time"] ."<br>";
   $t = $row["time"];
   $blockeduser = $row["username"];
   if(time()-$t >= 30){
    $del = "DELETE FROM blocked WHERE username = '$blockeduser' ";
    $result_3 = mysqli_query($conn, $del);
   }
  }
} 

$time=time();
//echo $time;






session_start();
$pictures = array(0,1,2,3,4,5,6,7,8);
$start = array_rand($pictures);


$picid[8];
for ($i= 0; $i < 9; $i++){
    $picid[$i] = $start + $i;
    if($picid[$i]>8){
        $picid[$i] = $picid[$i]-9;
    }
   // echo $picid[$i];
}
//echo $picid[0];
$pic1 = $picid[0];
$pic2 = $picid[1];
$pic3 = $picid[2];
$pic4 = $picid[3];
$pic5 = $picid[4];
$pic6 = $picid[5];
$pic7 = $picid[6];
$pic8 = $picid[7];
$pic9 = $picid[8];
//echo $pic1;
$_SESSION["pic1"] = $pic1;
$_SESSION["pic2"] = $pic2;
$_SESSION["pic3"] = $pic3;
$_SESSION["pic4"] = $pic4;
$_SESSION["pic5"] = $pic5;
$_SESSION["pic6"] = $pic6;
$_SESSION["pic7"] = $pic7;
$_SESSION["pic8"] = $pic8;
$_SESSION["pic9"] = $pic9;

$showAlert = '';
$_SESSION["falseatempts"];
$previous_username="";
//echo $_SESSION["login_username"];


if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST['username']))
  $username = $_POST['username'];

  if($username==$_SESSION["login_username"]){
     $previous_username="same";
     //echo"ook";
  }

  $_SESSION["login_username"] = $_POST["username"];
  

 if(isset($_POST['password']))
 $password = $_POST['password'];

 $query_2 = "select * from blocked where username='$username' ";
  $result_2 = mysqli_query($conn, $query_2);

  $num_2 = mysqli_num_rows($result_2);
  if($num_2 >= 1){
    $userstatus="blocked";
  }

  $query = "select * from private where username='$username' ";
  $result = mysqli_query($conn, $query);

  $num = mysqli_num_rows($result);
  if($num == 1){
    
  $row = mysqli_fetch_assoc($result);
     // echo $row['password'];
     $verified =  password_verify($password, $row['password']);
      if(($verified == 1) && $userstatus != "blocked"){
  
        $_SESSION["falseatempts"]=0;
        $_SESSION["falsevisualattempts"] = 0;
    header("location:visAuth_.php");
  }
  else{
    if($userstatus != "blocked")
   { $showAlert = 'wrong'; }

    if($previous_username=="same"){
    $_SESSION["falseatempts"] = $_SESSION["falseatempts"]+1;
    //echo $_SESSION["falseatempts"];
  }
  else { $_SESSION["falseatempts"]=0;
    $_SESSION["falsevisualattempts"] = 0;           }
}


  }
  else{
      $showAlert = 'notexist';
     $_SESSION["falseatempts"]=0;

  }

}

//echo $_SESSION["falseatempts"];

if(($_SESSION["falseatempts"]>=3) && ($userstatus != "blocked") && ($username!="root")){
$t=time();
  $sql_1="INSERT INTO `blocked` ( `username`, `time`) VALUES ('$username', $t);";
   $result_1 = mysqli_query($conn, $sql_1);

   $userstatus="blocked";

}










?>


        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="login_2.css" rel="stylesheet" type="text/css">
   
    
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
<h1>Login here</h1><br>
<form class = 'form' action = '' method="post" >
      <div class="mb-3">
    
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="emailHelp"  required>
      </div>
      <?php if($showAlert == "notexist" && $_SESSION["falseatempts"]<=3)
   { echo "<strong > Fail!</strong> Username doesn't exist ";}
    
    else if($userstatus=="blocked"){
      echo " This username is not allowed for login for next 30 sec.";
     }

    ?>

      <div class="mb-3">
      <label for="username" class="form-label">  _</label>
        <input type="password" class="form-control" id="password" name = "password" placeholder="Password"required>
      </div>
    <?php if($showAlert == "wrong")
    echo "<strong > Fail!</strong> You entered wrong password ";
    ?>

      <br>
      
      <button type='submit' class='btn btn-primary' >  LOGIN </button> 
    
    </form>
</div>
        
   
</body>
</html>