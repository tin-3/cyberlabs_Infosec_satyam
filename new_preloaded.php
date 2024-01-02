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





if(isset($_POST['submit'])){

  

    $username = $_SESSION['login_username'];
    $sql="UPDATE pictures SET image_src1='$imgr1', image_src2= '$img2' ,image_src3 ='$img3', image_src4='$img4', image_src5='$img5' ,image_src6='$img6' ,image_src7='$img7',image_src8='$img8', image_src9='$img9' WHERE username='$username' ";

   $result = mysqli_query($conn, $sql);

   header("location: new_arrange.php");
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
        <li> These will be your pictures for <strong> Visual Authentication </strong> </li>
        
    </ul>
    <button><h1> Help ? </h1></button>
</div>

<?php  
if(!$conn){die("sorry, we failed to connect". mysqli_error($conn));}
else{echo"we are connected succesfully";}

echo' ';
$username = $_SESSION['login_username'];
echo $username;
?>

<div class="container">
<form action = 'new_alert2.php' method="post" enctype="multipart/form-data">

<table>
    <tr>
        <th>
<img src = "<?php echo$img1 ?>"  id="displayimg1" height="200px" width="200px "/>
           
</th>
<th>
<img src = "<?php echo$img2 ?>"  id="displayimg2" height="200px" width="200px "/>
       

</th>
<th>
<img src = "<?php echo$img3 ?>"  id="displayimg3" height="200px" width="200px "/>
 
      
</th>

<tr>
<th>
<img src = "<?php echo$img4 ?>"  id="displayimg4" height="200px" width="200px "/>
       
</th>
<th>
<img src = "<?php echo$img5 ?>"  id="displayimg5" height="200px" width="200px "/>

</th>
<th>
<img src = "<?php echo$img6 ?>"  id="displayimg6" height="200px" width="200px "/>

</th>
</tr>
<th>
<img src = "<?php echo$img7 ?>"  id="displayimg7" height="200px" width="200px "/>
</th>
<th>
<img src = "<?php echo$img8 ?>"  id="displayimg8" height="200px" width="200px "/>

</th>
<th>
<img src = "<?php echo$img9 ?>"  id="displayimg9" height="200px" width="200px "/>

</th>
</tr>

<button type="submit" class="btn-primary" >  NEXT </button>


    </form>
</div>
   
</body>
</html>

