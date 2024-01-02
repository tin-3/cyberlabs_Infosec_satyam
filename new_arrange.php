<?php
session_start();
error_reporting(E_ERROR | E_PARSE);



$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";

$conn = mysqli_connect($servername, $username, $password, $database);





$username = $_SESSION['login_username'];


if(isset($_POST["num"])){

    $num=$_POST['input'].$_POST['num'] ;
}
else{
    $num='';}




?>

<?php
$query = mysqli_query($conn,"select * from pictures where username = '$username'");
$row = mysqli_fetch_array($query);

$img1 = $img2 = $img3 =$img4 = $img5 = $img6 = $img7 = $img8 = $img9 =""; 

if(isset($row['image_src1']))
$img1 = $row["image_src1"];

if(isset($row['image_src2']))
$img2 = $row["image_src2"];

if(isset($row['image_src3']))
$img3 = $row["image_src3"];

if(isset($row['image_src4']))
$img4 = $row["image_src4"];

if(isset($row['image_src5']))
$img5 = $row["image_src5"];

if(isset($row['image_src6']))
$img6 = $row["image_src6"];

if(isset($row['image_src7']))
$img7 = $row["image_src7"];

if(isset($row['image_src8']))
$img8 = $row["image_src8"];

if(isset($row['image_src9']))
$img9 = $row["image_src9"];


$fun1 = 'triggerClick1()';
$fun2 = 'triggerClick2()';
$fun3 = 'triggerClick3()';
$fun4 = 'triggerClick4()';
$fun5 = 'triggerClick5()';
$fun6 = 'triggerClick6()';
$fun7 = 'triggerClick7()';
$fun8 = 'triggerClick8()';
$fun9 = 'triggerClick9()';


if($num[0] == 1 || $num[1] == 1 || $num[2] == 1 || $num[3] == 1 || $num[4] == 1 || $num[5] == 1 || $num[6] == 1 || $num[7] == 1 || $num[8] == 1 || $num[9] == 1  )
$img1 = 'imgholder/lock.png' ;
if($num[0] == 1 || $num[1] == 1 || $num[2] == 1 || $num[3] == 1 || $num[4] == 1 || $num[5] == 1 || $num[6] == 1 || $num[7] == 1 || $num[8] == 1 || $num[9] == 1  )
$fun1 = 'imgholder/lock.png' ;

if($num[0] == 2 || $num[1] == 2 || $num[2] == 2 || $num[3] == 2 || $num[4] == 2 || $num[5] == 2 || $num[6] == 2 || $num[7] == 2 || $num[8] == 2 || $num[9] == 2  )
$img2 = 'imgholder/lock.png' ;
if($num[0] == 2 || $num[1] == 2 || $num[2] == 2 || $num[3] == 2 || $num[4] == 2 || $num[5] == 2 || $num[6] == 2 || $num[7] == 2 || $num[8] == 2 || $num[9] == 2  )
$fun2 = 'imgholder/lock.png' ;

if($num[0] == 3 || $num[1] == 3 || $num[2] == 3 || $num[3] == 3 || $num[4] == 3 || $num[5] == 3 || $num[6] == 3 || $num[7] == 3 || $num[8] == 3 || $num[9] == 3  )
$img3 = 'imgholder/lock.png' ;
if($num[0] == 3 || $num[1] == 3 || $num[2] == 3 || $num[3] == 3 || $num[4] == 3 || $num[5] == 3 || $num[6] == 3 || $num[7] == 3 || $num[8] == 3 || $num[9] == 3  )
$fun3 = 'imgholder/lock.png' ;

if($num[0] == 4 || $num[1] == 4 || $num[2] == 4 || $num[3] == 4 || $num[4] == 4 || $num[5] == 4 || $num[6] == 4 || $num[7] == 4 || $num[8] == 4 || $num[9] == 4  )
$img4 = 'imgholder/lock.png' ;
if($num[0] == 4 || $num[1] == 4 || $num[2] == 4 || $num[3] == 4 || $num[4] == 4 || $num[5] == 4 || $num[6] == 4 || $num[7] == 4 || $num[8] == 4 || $num[9] == 4  )
$fun4 = 'imgholder/lock.png' ;

if($num[0] == 5 || $num[1] == 5 || $num[2] == 5 || $num[3] == 5 || $num[4] == 5 || $num[5] == 5 || $num[6] == 5 || $num[7] == 5 || $num[8] == 5 || $num[9] == 5  )
$img5 = 'imgholder/lock.png' ;
if($num[0] == 5 || $num[1] == 5 || $num[2] == 5 || $num[3] == 5 || $num[4] == 5 || $num[5] == 5 || $num[6] == 5 || $num[7] == 5 || $num[8] == 5 || $num[9] == 5  )
$fun5 = 'imgholder/lock.png' ;

if($num[0] == 6 || $num[1] == 6 || $num[2] == 6 || $num[3] == 6 || $num[4] == 6 || $num[5] == 6 || $num[6] == 6 || $num[7] == 6 || $num[8] == 6 || $num[9] == 6  )
$img6 = 'imgholder/lock.png' ;
if($num[0] == 6 || $num[1] == 6 || $num[2] == 6 || $num[3] == 6 || $num[4] == 6 || $num[5] == 6 || $num[6] == 6 || $num[7] == 6 || $num[8] == 6 || $num[9] == 6  )
$fun6 = 'imgholder/lock.png' ;

if($num[0] == 7 || $num[1] == 7 || $num[2] == 7 || $num[3] == 7 || $num[4] == 7 || $num[5] == 7 || $num[6] == 7 || $num[7] == 7 || $num[8] == 7 || $num[9] == 7  )
$img7 = 'imgholder/lock.png' ;
if($num[0] == 7 || $num[1] == 7 || $num[2] == 7 || $num[3] == 7 || $num[4] == 7 || $num[5] == 7 || $num[6] == 7 || $num[7] == 7 || $num[8] == 7 || $num[9] == 7  )
$fun7 = 'imgholder/lock.png' ;

if($num[0] == 8 || $num[1] == 8 || $num[2] == 8 || $num[3] == 8 || $num[4] == 8 || $num[5] == 8 || $num[6] == 8 || $num[7] == 8 || $num[8] == 8 || $num[9] == 8  )
$img8 = 'imgholder/lock.png' ;
if($num[0] == 8 || $num[1] == 8 || $num[2] == 8 || $num[3] == 8 || $num[4] == 8 || $num[5] == 8 || $num[6] == 8 || $num[7] == 8 || $num[8] == 8 || $num[9] == 8  )
$fun8 = 'imgholder/lock.png' ;

if($num[0] == 9 || $num[1] == 9 || $num[2] == 9 || $num[3] == 9 || $num[4] == 9 || $num[5] == 9 || $num[6] == 9 || $num[7] == 9 || $num[8] == 9 || $num[9] == 9  )
$img9 = 'imgholder/lock.png' ;
if($num[0] == 9 || $num[1] == 9 || $num[2] == 9 || $num[3] == 9 || $num[4] == 9 || $num[5] == 9 || $num[6] == 9 || $num[7] == 9 || $num[8] == 9 || $num[9] == 9  )
$fun9 = 'imgholder/lock.png' ;

$v1 = $v2 = $v3 =$v4 =$v5 = $v6 = $v7 =$v8 =$v9 = 0;

if($num[0] == 1 || $num[1] == 1 || $num[2] == 1 || $num[3] == 1 || $num[4] == 1 || $num[5] == 1 || $num[6] == 1 || $num[7] == 1 || $num[8] == 1 || $num[9] == 1  )
   $v1 = 1;

  if( $num[0] == 2 || $num[1] == 2 || $num[2] == 2 || $num[3] == 2 || $num[4] == 2 || $num[5] == 2 || $num[6] == 2 || $num[7] == 2 || $num[8] == 2 || $num[9] == 2 )
  $v2 = 1;

  if($num[0] == 3 || $num[1] == 3 || $num[2] == 3 || $num[3] == 3 || $num[4] == 3 || $num[5] == 3 || $num[6] == 3 || $num[7] == 3 || $num[8] == 3 || $num[9] == 3 )
  $v3=1;

 if ($num[0] == 4 || $num[1] == 4 || $num[2] == 4 || $num[3] == 4 || $num[4] == 4 || $num[5] == 4 || $num[6] == 4 || $num[7] == 4 || $num[8] == 4 || $num[9] == 4 )
 $v4=1; 

 if ($num[0] == 5 || $num[1] == 5 || $num[2] == 5 || $num[3] == 5 || $num[4] == 5 || $num[5] == 5 || $num[6] == 5 || $num[7] == 5 || $num[8] == 5 || $num[9] == 5)
 $v5=1; 

  if($num[0] == 6 || $num[1] == 6 || $num[2] == 6 || $num[3] == 6 || $num[4] == 6 || $num[5] == 6 || $num[6] == 6 || $num[7] == 6 || $num[8] == 6 || $num[9] == 6 )
  $v6=1;

 if ($num[0] == 7 || $num[1] == 7 || $num[2] == 7 || $num[3] == 7 || $num[4] == 7 || $num[5] == 7 || $num[6] == 7 || $num[7] == 7 || $num[8] == 7 || $num[9] == 7 )
  $v7=1;

  if($num[0] == 8 || $num[1] == 8 || $num[2] == 8 || $num[3] == 8 || $num[4] == 8 || $num[5] == 8 || $num[6] == 8 || $num[7] == 8 || $num[8] == 8 || $num[9] == 8 )
  $v8=1;

 if ($num[0] == 9 || $num[1] == 9 || $num[2] == 9 || $num[3] == 9 || $num[4] == 9 || $num[5] == 9 || $num[6] == 9 || $num[7] == 9 || $num[8] == 9 || $num[9] == 9 )
$v9=1;

if ( $v1==1 &&  $v2==1 && $v3==1&& $v4==1 &&$v5==1&&$v6==1&&$v7==1&&$v8==1 && $v9==1   )
{
    $num_ = password_hash($num, PASSWORD_BCRYPT);
    $sql="UPDATE `visual password` SET visualpin = '$num_' WHERE username='$username' ";
$result=mysqli_query($conn, $sql);

header("location:welcome.php");

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
        <li>Select the pictures in <strong> order </strong> you want as your <strong> graphical password</strong> </li>
        
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
<form method='post'>

<input type='text' name='input' value='<?php echo @$num ?>' style='display:none'>

<br><br>
<table>
    <tr>
        <th>
<input type='submit' name='num' value='1' id='num1' style='display:none'>
<img src = '<?php echo $img1 ?>' onclick= <?php echo $fun1 ?>  id = 'displayimg1'height='200px' width='200px'>
</th>
<th>
<input type='submit' name='num' value='2' id='num2' style='display:none'>
<img src = '<?php echo $img2 ?>' onclick=<?php echo $fun2 ?> id = 'displayimg2'height='200px' width='200px'>
</th>
<th>
<input type='submit' name='num' value='3' id='num3' style='display:none'>
<img src = '<?php echo $img3 ?>' onclick=<?php echo $fun3 ?> id = 'displayimg3'height='200px' width='200px'>
</th>
</tr>
<tr>
    <th>
<input type='submit' name='num' value='4' id='num4' style='display:none'>
<img src = '<?php echo $img4 ?>' onclick=<?php echo $fun4 ?> id = 'displayimg4'height='200px' width='200px'>
</th>
<th>
<input type='submit' name='num' value='5' id='num5' style='display:none'>
<img src = '<?php echo $img5 ?>' onclick=<?php echo $fun5 ?> id = 'displayimg5'height='200px' width='200px'>
</th>
<th>
<input type='submit' name='num' value='6' id='num6' style='display:none'>
<img src = '<?php echo $img6 ?>' onclick=<?php echo $fun6 ?> id = 'displayimg6'height='200px' width='200px'>
</th>
</tr>
<tr>
<th>
<input type='submit' name='num' value='7' id='num7' style='display:none'>
<img src = '<?php echo $img7 ?>' onclick=<?php echo $fun7 ?> id = 'displayimg7'height='200px' width='200px'>
</th>
<th>
<input type='submit' name='num' value='8' id='num8' style='display:none'>
<img src = '<?php echo $img8 ?>' onclick=<?php echo $fun8 ?> id = 'displayimg8'height='200px' width='200px'>
</th>
<th>
<input type='submit' name='num' value='9' id='num9' style='display:none'>
<img src = '<?php echo $img9 ?>' onclick=<?php echo $fun9 ?> id = 'displayimg9'height='200px' width='200px'>
</th>
</tr>
</table>

</form>

<script src="arrange.js"></script>
</body>
</html>

