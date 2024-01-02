<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";

$conn = mysqli_connect($servername, $username, $password, $database);

session_start();
$username=$_SESSION['username'];

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

  

    $username = $_SESSION['username'];
    $sql = "INSERT INTO `pictures` (`username`, `image_src1`, `image_src2`, `image_src3`, `image_src4`, `image_src5`, `image_src6`, `image_src7`, `image_src8`, `image_src9`) 
   VALUES ('$username', '$folder1', '$folder2', '$folder3', '$folder4', '$folder5', '$folder6', '$folder7', '$folder8', '$folder9')";
   $result = mysqli_query($conn, $sql);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="upload_.css" rel="stylesheet" type="text/css">
   
    
</head>

<body>
<div class="page" id="page1">
<div id="nav">
    <h1>LetsSecure</h1>
    <ul>
        <li> Add the pictures you want for your <strong> Visual Authentication </strong> </li>
        
    </ul>
    <button><h1> Help ? </h1></button>
</div>

<?php  
if(!$conn){die("sorry, we failed to connect". mysqli_error($conn));}
else{echo"we are connected succesfully";}
echo" ";
echo"$username";
?>

<div class="container">
<form action = 'alert_1.php' method="post" enctype="multipart/form-data">

<table>
    <tr>
        <th>
<img src = "imgholder/placeholder.png" onclick="triggerClick1()" id="displayimg1" height="200px" width="200px "/>
         <input type = "file" name = "image1" onchange="display1(this)" id = "image1" style = "display:none" >  
</th>
<th>
<img src = "imgholder/placeholder.png" onclick="triggerClick2()" id="displayimg2" height="200px" width="200px "/>
         <input type = "file" name = "image2" onchange="display2(this)" id = "image2" style = "display:none"  >  

</th>
<th>
<img src = "imgholder/placeholder.png" onclick="triggerClick3()" id="displayimg3" height="200px" width="200px "/>
 
         <input type = "file" name = "image3" onchange="display3(this)" id = "image3" style = "display:none"  >  

</th>

<tr>
<th>
<img src = "imgholder/placeholder.png" onclick="triggerClick4()" id="displayimg4" height="200px" width="200px "/>
         <input type = "file" name = "image4" onchange="display4(this)" id = "image4" style = "display:none" >  
</th>
<th>
<img src = "imgholder/placeholder.png" onclick="triggerClick5()" id="displayimg5" height="200px" width="200px "/>
         <input type = "file" name = "image5" onchange="display5(this)" id = "image5" style = "display:none" >  

</th>
<th>
<img src = "imgholder/placeholder.png" onclick="triggerClick6()" id="displayimg6" height="200px" width="200px "/>
         <input type = "file" name = "image6" onchange="display6(this)" id = "image6" style = "display:none" >  

</th>
</tr>
<th>
<img src = "imgholder/placeholder.png" onclick="triggerClick7()" id="displayimg7" height="200px" width="200px "/>
         <input type = "file" name = "image7" onchange="display7(this)" id = "image7" style = "display:none" >  
</th>
<th>
<img src = "imgholder/placeholder.png" onclick="triggerClick8()" id="displayimg8" height="200px" width="200px "/>
         <input type = "file" name = "image8" onchange="display8(this)" id = "image8" style = "display:none" >  

</th>
<th>
<img src = "imgholder/placeholder.png" onclick="triggerClick9()" id="displayimg9" height="200px" width="200px "/>
         <input type = "file" name = "image9" onchange="display9(this)" id = "image9" style = "display:none" >  

</th>
</tr>
<h2><a href="preloaded_.php"> Use pre-loaded images </a> </h2>
<br><br>
<button type="submit" class="btn-primary" >  SUBMIT </button>


    </form>
</div>
   
<script src = "uploadimg.js"> </script>
</body>
</html>

