<?php
session_start();
error_reporting(E_ERROR | E_PARSE);



$servername = "localhost";
$username = "root";
$password = "";
$database = "credential_new";

$conn = mysqli_connect($servername, $username, $password, $database);

if($username==$_SESSION["login_username"]){
    $previous_username="same";
    // echo"ook";
 }

$username = $_SESSION['login_username'];
// echo $username;
$_SESSION["falsevisualattempts"];

// echo$_SESSION["falsevisualattempts"];


$pic1 = $_SESSION["pic1"];
$pic2 = $_SESSION["pic2"];
$pic3 = $_SESSION["pic3"];
$pic4 = $_SESSION["pic4"];
$pic5 = $_SESSION["pic5"];
$pic6 = $_SESSION["pic6"];
$pic7 = $_SESSION["pic7"];
$pic8 = $_SESSION["pic8"];
$pic9 = $_SESSION["pic9"];

// echo$pic1;
// echo$pic2;
// echo$pic3;
// echo$pic4;
// echo$pic5;
// echo$pic6;
// echo$pic7;
// echo$pic8;
// echo$pic9;

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

  
if ( $v1==1 &&  $v2==1 && $v3==1&& $v4==1 &&$v5==1&&$v6==1&&$v7==1&&$v8==1 && $v9==1   ){



    $query = "select * from `visual password` where username='$username'";
    $result = mysqli_query($conn, $query);
  
    $cont = mysqli_num_rows($result);
   
    if($cont == 1){

      $row = mysqli_fetch_assoc($result);
      $verified =  password_verify($num, $row['visualpin']);
      if($verified == 1){

        header("location:welcome.php");
    $_SESSION["falsevisualattempts"] = 0;

     
      }
      else{
             $showAlert= "false";
         // if($previous_username=='same'){ 
             $_SESSION["falsevisualattempts"] = $_SESSION["falsevisualattempts"] +1;
             //$num='';
           // else {$_SESSION["falsevisualattempts"] = 0;}

             header("location:visAuth_.php");
           
      }
    }
}
   
if(($_SESSION["falsevisualattempts"]>3) && ($cont !=1)){
    
    $time = time();

    $sql_1="INSERT INTO `blocked` ( `username`, `time`) VALUES ('$username', $time);";
     $result_1 = mysqli_query($conn, $sql_1);

  if($result_1){
    $_SESSION["falsevisualattempts"] =0;
    header("location:home_.php");
  }
}

?>
<?php
$pictures = array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9);



$val1=$pic1+1;
$val2=$pic2+1;
$val3=$pic3+1;
$val4 = $pic4+1;
$val5 = $pic5+1;
$val6 = $pic6+1;
$val7 = $pic7+1;
$val8 = $pic8+1;
$val9 = $pic9+1;


$func= array("$fun1","$fun2","$fun3","$fun4","$fun5","$fun6","$fun7","$fun8","$fun9");
$id=array('num1','num2','num3','num4','num5','num6','num7','num8','num9');
$id_img=array('displayimg1','displayimg2','displayimg3','displayimg4','displayimg5','displayimg6','displayimg7','displayimg8','displayimg9');


// echo $pictures[$pic9];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="visAuth_.css" rel="stylesheet" type="text/css">
   
    
</head>

<body>
<div class="page" id="page1">
<div id="nav">
    <h1>LetsSecure</h1>
    <ul>
        <li> Enter your <strong> graphical password </strong>  </li>
        
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

<input type='text' name='input' value='<?php echo @$num ?>' style = "display:none">

<?php

if($showAlert=="false"){
    echo"<strong> WRONG ORDER </strong>";
}

if($userstatus=='blocked'){
    echo "<strong> THIS USERNAME IS BLOCKED </strong>";
}





?>

<br><br>

<table>
    <tr>
        <th>
<input type='submit' name='num' value=<?php echo $val1 ?> id=<?php echo $id[$pic1] ?> style='display:none'>
<img src = <?php echo $pictures[$pic1] ?> onclick= <?php echo $func[$pic1] ?>  id = <?php echo $id_img[$pic1]  ?> height='200px' width='200px'>
        </th>
        <th>
<input type='submit' name='num' value=<?php echo $val2 ?> id=<?php echo $id[$pic2] ?> style='display:none'>
<img src = <?php echo $pictures[$pic2] ?> onclick= <?php echo $func[$pic2] ?>  id = <?php echo $id_img[$pic2]  ?> height='200px' width='200px'>
        </th>
        <th>

<input type='submit' name='num' value=<?php echo $val3 ?> id=<?php echo $id[$pic3] ?> style='display:none'>
<img src = <?php echo $pictures[$pic3] ?> onclick= <?php echo $func[$pic3] ?>  id = <?php echo $id_img[$pic3]  ?> height='200px' width='200px'>
        </th>
    </tr>


<tr>
    <th>
<input type='submit' name='num' value=<?php echo $val4 ?> id=<?php echo $id[$pic4] ?> style='display:none'>
<img src = <?php echo $pictures[$pic4] ?> onclick= <?php echo $func[$pic4] ?>  id = <?php echo $id_img[$pic4]  ?> height='200px' width='200px'>
    </th>
    <th>

<input type='submit' name='num' value=<?php echo $val5 ?> id=<?php echo $id[$pic5] ?> style='display:none'>
<img src = <?php echo $pictures[$pic5] ?> onclick= <?php echo $func[$pic5] ?>  id = <?php echo $id_img[$pic5]  ?> height='200px' width='200px'>
    </th>
    <th>

<input type='submit' name='num' value=<?php echo $val6 ?> id=<?php echo $id[$pic6] ?> style='display:none'>
<img src = <?php echo $pictures[$pic6] ?> onclick= <?php echo $func[$pic6] ?>  id = <?php echo $id_img[$pic6]  ?> height='200px' width='200px'>
    </th>
</tr>

<tr>
    <th>
<input type='submit' name='num' value=<?php echo $val7 ?> id=<?php echo $id[$pic7] ?> style='display:none'>
<img src = <?php echo $pictures[$pic7] ?> onclick= <?php echo $func[$pic7] ?>  id = <?php echo $id_img[$pic7]  ?> height='200px' width='200px'>
    </th>
    <th>

<input type='submit' name='num' value=<?php echo $val8 ?> id=<?php echo $id[$pic8] ?> style='display:none'>
<img src = <?php echo $pictures[$pic8] ?> onclick= <?php echo $func[$pic8] ?>  id = <?php echo $id_img[$pic8]  ?> height='200px' width='200px'>
    </th>
<th>
<input type='submit' name='num' value=<?php echo $val9 ?> id=<?php echo $id[$pic9] ?> style='display:none'>
<img src = <?php echo $pictures[$pic9] ?> onclick= <?php echo $func[$pic9] ?>  id = <?php echo $id_img[$pic9]  ?> height='200px' width='200px'>
</th>
</tr>
</table>



</form>
<script src="arrange.js"></script>
</body>
</html>

