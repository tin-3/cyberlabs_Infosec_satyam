

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";

$conn = mysqli_connect($servername, $username, $password, $database);

$username = $_SESSION['login_username'];



?>



<?php

$filename1 = $tempname1 = $folder1 = "";
$filename2 = $tempname2 = $folder2 = "";
$filename3 = $tempname3 = $folder3 = "";
$filename4 = $tempname4 = $folder4 = "";
$filename5 = $tempname5 = $folder5 = "";
$filename6 = $tempname6 = $folder6 = "";
$filename7 = $tempname7 = $folder7 = "";
$filename8 = $tempname8 = $folder8 = "";
$filename9 = $tempname9 = $folder9 = "";

if(isset($_FILES["image1"]["name"]))
$filename1 = $_FILES["image1"]["name"];

if(isset($_FILES["image1"]["tmp_name"]))
$tempname1 = $_FILES["image1"]["tmp_name"];

if(isset($folder1))
$folder1 = "images/".$filename1;


if(isset($_FILES["image2"]["name"]))
$filename2 = $_FILES["image2"]["name"];

if(isset($_FILES["image2"]["tmp_name"]))
$tempname2 = $_FILES["image2"]["tmp_name"];

if(isset($folder2))
$folder2 = "images/".$filename2;
move_uploaded_file($tempname2, $folder2);

if(isset($_FILES["image3"]["name"]))
$filename3 = $_FILES["image3"]["name"];

if(isset($_FILES["image3"]["tmp_name"]))
$tempname3 = $_FILES["image3"]["tmp_name"];

if(isset($folder3))
$folder3 = "images/".$filename3;
move_uploaded_file($tempname3, $folder3);

if(isset($_FILES["image4"]["name"]))
$filename4 = $_FILES["image4"]["name"];

if(isset($_FILES["image4"]["tmp_name"]))
$tempname4 = $_FILES["image4"]["tmp_name"];

if(isset($folder4))
$folder4 = "images/".$filename4;
move_uploaded_file($tempname4, $folder4);

if(isset($_FILES["image5"]["name"]))
$filename5 = $_FILES["image5"]["name"];

if(isset($_FILES["image5"]["tmp_name"]))
$tempname5 = $_FILES["image5"]["tmp_name"];

if(isset($folder5))
$folder5 = "images/".$filename5;
move_uploaded_file($tempname5, $folder5);

if(isset($_FILES["image6"]["name"]))
$filename6 = $_FILES["image6"]["name"];

if(isset($_FILES["image6"]["tmp_name"]))
$tempname6 = $_FILES["image6"]["tmp_name"];

if(isset($folder6))
$folder6 = "images/".$filename6;
move_uploaded_file($tempname6, $folder6);

if(isset($_FILES["image7"]["name"]))
$filename7 = $_FILES["image7"]["name"];

if(isset($_FILES["image7"]["tmp_name"]))
$tempname7 = $_FILES["image7"]["tmp_name"];

if(isset($folder7))
$folder7 = "images/".$filename7;
move_uploaded_file($tempname7, $folder7);

if(isset($_FILES["image8"]["name"]))
$filename8 = $_FILES["image8"]["name"];

if(isset($_FILES["image8"]["tmp_name"]))
$tempname8 = $_FILES["image8"]["tmp_name"];

if(isset($folder8))
$folder8 = "images/".$filename8;
move_uploaded_file($tempname8, $folder8);

if(isset($_FILES["image9"]["name"]))
$filename9 = $_FILES["image9"]["name"];

if(isset($_FILES["image9"]["tmp_name"]))
$tempname9 = $_FILES["image9"]["tmp_name"];

if(isset($folder9))
$folder9 = "images/".$filename9;
move_uploaded_file($tempname9, $folder9);

if(move_uploaded_file($tempname1, $folder1)){

  
    $username = $_SESSION['login_username'];
    $sql="UPDATE pictures SET image_src1='$folder1', image_src2= '$folder2' ,image_src3 ='$folder3', image_src4='$folder4', image_src5='$folder5' ,image_src6='$folder6' ,image_src7='$folder7',image_src8='$folder8', image_src9='$folder9' WHERE username='$username' ";
   $result = mysqli_query($conn, $sql);
   header("location: new_arrange.php");
 
}
?>