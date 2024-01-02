
<?php
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$database = "credentials";

$conn = mysqli_connect($servername, $username, $password, $database);


session_start();

$username = $_SESSION['login_username'];



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="home_.css" rel="stylesheet" type="text/css">
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
    <button><h1>Help ?</h1> </button>
</div>


<?php  
if(!$conn){die("sorry, we failed to connect". mysqli_error($conn));}
else{echo"we are connected succesfully";} 
echo " ";
echo $username;
?>

<div class="home-container">
    <div id="left" >
<h1>visual</h1>
<p style="font-size:72px">AUTHENTICATION</p>
<h1>
    <span ><img class="circle-img" src="imgholder/lock.png" alt=""></span>
    <span ><img class="circle-img" src="imgholder/woc.png" alt=""></span>
    <span ><img class="circle-img" src="imgholder/cyberlabs.jpeg" alt=""></span>
 
    done</h1>
    </div>
    <div id="right">
<img src="imgholder/secure-icon4.png" style="width: 600px;"> 
    </div>
</div>
</div>

<script src=home_.js > </script>

</body>
</html>
