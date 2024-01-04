<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";

$conn = mysqli_connect($servername, $username, $password, $database);

session_start();
$username = $_SESSION["username"];

$img1 = 'imgholder/image1.png';
$img2 = 'imgholder/image2.png';
$img3 = 'imgholder/image3.png';
$img4 = 'imgholder/image4.png';
$img5 = 'imgholder/image5.png';
$img6 = 'imgholder/image6.png';
$img7 = 'imgholder/image7.png';
$img8 = 'imgholder/image8.png';
$img9 = 'imgholder/image9.png';




  

    $copyuser = $_SESSION['username'];
    $sql = "INSERT INTO `pictures` (`username`, `image_src1`, `image_src2`, `image_src3`, `image_src4`, `image_src5`, `image_src6`, `image_src7`, `image_src8`, `image_src9`) 
   VALUES ('$copyuser', '$img1', '$img2', '$img3', '$img4', '$img5', '$img6', '$img7', '$img8', '$img9')";
   $result = mysqli_query($conn, $sql);

   header("location: arrange_.php");

?>



</html>

