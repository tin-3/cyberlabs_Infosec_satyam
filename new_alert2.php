<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";

$conn = mysqli_connect($servername, $username, $password, $database);


$img1 = 'imgholder/image1.png';
$img2 = 'imgholder/image2.png';
$img3 = 'imgholder/image3.png';
$img4 = 'imgholder/image4.png';
$img5 = 'imgholder/image5.png';
$img6 = 'imgholder/image6.png';
$img7 = 'imgholder/image7.png';
$img8 = 'imgholder/image8.png';
$img9 = 'imgholder/image9.png';


  

$username = $_SESSION['login_username'];
$sql="UPDATE pictures SET image_src1='$img1', image_src2= '$img2' ,image_src3 ='$img3', image_src4='$img4', image_src5='$img5' ,image_src6='$img6' ,image_src7='$img7',image_src8='$img8', image_src9='$img9' WHERE username='$username' ";

   $result = mysqli_query($conn, $sql);

   header("location: new_arrange.php");


?>