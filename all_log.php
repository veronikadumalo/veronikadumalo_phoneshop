<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Smartphone World</title>
    <link rel="shortcut icon" href="assets/img/images.jpg" />
    <link rel="stylesheet" href="assets/style/norm.css" />
    <link href="style/style.css" type="text/css" rel="stylesheet">
   <style>
       #knopka{
           background: rgba(204, 204, 204, 0.7);

  border: none;
  color: black;
  padding: 20px 70px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left:40%;
  margin-top:2%;
  margin-bottom:5%;
       }
    </style>

</head>
<body style="font-family: 'Courier New', Courier, monospace;">
   <div id= "menu">
       <p><a href="index_log.php">Smartphone World</a></p>
 
       
    

<nav role="navigation">
  <ul>
    <li style="margin-left: 13%;"><a href="samsung_log.php">Samsung</a></li>
    <li style="margin-left: 5%;"><a href="apple_log.php">Apple</a></li>
      <li style="margin-left: 5%;"><a href="xiaomi_log.php">Xiomi</a></li>
      <li style="margin-left: 5%;"><a href="huawei_log.php">Huawei</a></li>
        <li style="margin-left: 5%;"><a href="all_log.php">All</a></li>
        <li style="margin-left: 10%;"><a href="card.php"><img src="assets/img/shopping-cart--v2.png" style="height: 35px;"></a></li>
      
      
      
      <?php
      $fd = fopen("log.txt", 'r') or die("не удалось открыть файл");
      while(!feof($fd))
      {
        $login = htmlentities(fgets($fd));
    
      }
      fclose($fd); 
      
        include ("connect.php");
        $conn2 = OpenCon();
    
    
        $res=mysqli_query($conn2, "SELECT COUNT(id) FROM ".$login);
            while($row = mysqli_fetch_array($res)){
                $id1=$row;
                echo ($id1[0]);
            }
      
     ?> 
      
      
      
      
    <li style="margin-left: 2%;display: inline-block; "><a href="account.php"><img src="assets/img/computer-icons-google-account-icon-design-login-others-png-clip-art.png" style="height: 35px;"></a>
    </li>
              
      
   <?php
$fd = fopen("data.txt", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
    echo $str;
}
fclose($fd);
?>
      <li style="margin-left: 1%;"><a href="index.html"><img src="assets/img/339-3396821_png-file-svg-download-icon-logout-transparent-png.png" style="height: 35px;"></a></li> 
      
  </ul>
</nav>
    </div>      
<!--<div id="phone_box"
     style="
            background-color: white;
    width: 100%;
    height: auto;
            text-align:right;
            ">
    
 Sort by <select style="margin-right: 5%; margin-top: 1%">
  <option value="Priсe">Priсe</option>
  <option value="Mark">Mark</option>
    <option value="Memory">Memory</option>
</select>
    <hr>
    </div> -->
    <div id="phone_box"
     style="
            background-color: white;
    width: 100%;
    height: auto;
            ">

       <?php
        $fd = fopen("log.txt", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $login = htmlentities(fgets($fd));
    
}
fclose($fd); 
    
    $conn = OpenCon();
    
    
    $result2=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '12'");
        while($row = mysqli_fetch_array($result2)){
    $id1=$row['id'];
    $marka1=$row['marka'];
    $model1=$row['model'];
    $cena1=$row['cena'];
    $ekran1=$row['ekran'];
    $system1=$row['system'];
    $memory1=$row['memory'];
    $img1=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img1'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka1 $model1 </p>
   <p style='font-size:18pt'>Screen: $ekran1</p>
   <p style='font-size:18pt'>System: $system1</p>
   <p style='font-size:18pt'>Memory: $memory1 GB</p>
   <p style='font-size:18pt'>Price: $cena1 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple1' value='Add to card' onClick='window.location.reload();' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple1'])){
            $resultat = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka1', '$model1', '$cena1','$img1')");
        }}
            
            
            
            $result3=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '19'");
        while($row = mysqli_fetch_array($result3)){
    $id2=$row['id'];
    $marka2=$row['marka'];
    $model2=$row['model'];
    $cena2=$row['cena'];
    $ekran2=$row['ekran'];
    $system2=$row['system'];
    $memory2=$row['memory'];
    $img2=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img2'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka2 $model2 </p>
   <p style='font-size:18pt'>Screen: $ekran2</p>
   <p style='font-size:18pt'>System: $system2</p>
   <p style='font-size:18pt'>Memory: $memory2 GB</p>
   <p style='font-size:18pt'>Price: $cena2 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple2' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple2'])){
            $resultat2 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka2', '$model2', '$cena2','$img2')");
        }}
        
         $result4=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '15'");
        while($row = mysqli_fetch_array($result4)){
    $id3=$row['id'];
    $marka3=$row['marka'];
    $model3=$row['model'];
    $cena3=$row['cena'];
    $ekran3=$row['ekran'];
    $system3=$row['system'];
    $memory3=$row['memory'];
    $img3=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img3'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka3 $model3 </p>
   <p style='font-size:18pt'>Screen: $ekran3</p>
   <p style='font-size:18pt'>System: $system3</p>
   <p style='font-size:18pt'>Memory: $memory3 GB</p>
   <p style='font-size:18pt'>Price: $cena3 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple3' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple3'])){
            $resultat3 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka3', '$model3', '$cena3','$img3')");
        }}
        
         $result5=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '20'");
        while($row = mysqli_fetch_array($result5)){
    $id4=$row['id'];
    $marka4=$row['marka'];
    $model4=$row['model'];
    $cena4=$row['cena'];
    $ekran4=$row['ekran'];
    $system4=$row['system'];
    $memory4=$row['memory'];
    $img4=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img4'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka4 $model4 </p>
   <p style='font-size:18pt'>Screen: $ekran4</p>
   <p style='font-size:18pt'>System: $system4</p>
   <p style='font-size:18pt'>Memory: $memory4 GB</p>
   <p style='font-size:18pt'>Price: $cena4 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple4' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple4'])){
            $resultat4 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka4', '$model4', '$cena4','$img4')");
        }}
        
         $result6=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '3'");
        while($row = mysqli_fetch_array($result6)){
    $id5=$row['id'];
    $marka5=$row['marka'];
    $model5=$row['model'];
    $cena5=$row['cena'];
    $ekran5=$row['ekran'];
    $system5=$row['system'];
    $memory5=$row['memory'];
    $img5=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img5'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka5 $model5 </p>
   <p style='font-size:18pt'>Screen: $ekran5</p>
   <p style='font-size:18pt'>System: $system5</p>
   <p style='font-size:18pt'>Memory: $memory5 GB</p>
   <p style='font-size:18pt'>Price: $cena5 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple5' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple5'])){
            $resultat5 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka5', '$model5', '$cena5','$img5')");
        }}
        
        
        
        
        
        $result7=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '14'");
        while($row = mysqli_fetch_array($result7)){
    $id6=$row['id'];
    $marka6=$row['marka'];
    $model6=$row['model'];
    $cena6=$row['cena'];
    $ekran6=$row['ekran'];
    $system6=$row['system'];
    $memory6=$row['memory'];
    $img6=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img6'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka6 $model6 </p>
   <p style='font-size:18pt'>Screen: $ekran6</p>
   <p style='font-size:18pt'>System: $system6</p>
   <p style='font-size:18pt'>Memory: $memory6 GB</p>
   <p style='font-size:18pt'>Price: $cena6 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple6' value='Add to card' onClick='window.location.reload();' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple6'])){
            $resultat5 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka6', '$model6', '$cena6','$img6')");
        }}
            
            
            
            $result8=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '16'");
        while($row = mysqli_fetch_array($result8)){
    $id7=$row['id'];
    $marka7=$row['marka'];
    $model7=$row['model'];
    $cena7=$row['cena'];
    $ekran7=$row['ekran'];
    $system7=$row['system'];
    $memory7=$row['memory'];
    $img7=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img7'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka7 $model7 </p>
   <p style='font-size:18pt'>Screen: $ekran7</p>
   <p style='font-size:18pt'>System: $system7</p>
   <p style='font-size:18pt'>Memory: $memory7 GB</p>
   <p style='font-size:18pt'>Price: $cena7 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple7' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple7'])){
            $resultat7 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka7', '$model7', '$cena7','$img7')");
        }}
        
         $result9=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '11'");
        while($row = mysqli_fetch_array($result9)){
    $id8=$row['id'];
    $marka8=$row['marka'];
    $model8=$row['model'];
    $cena8=$row['cena'];
    $ekran8=$row['ekran'];
    $system8=$row['system'];
    $memory8=$row['memory'];
    $img8=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img8'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka8 $model8 </p>
   <p style='font-size:18pt'>Screen: $ekran8</p>
   <p style='font-size:18pt'>System: $system8</p>
   <p style='font-size:18pt'>Memory: $memory8 GB</p>
   <p style='font-size:18pt'>Price: $cena8 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple8' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple8'])){
            $resultat8 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka8', '$model8', '$cena8','$img8')");
        }}
        
         $result10=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '7'");
        while($row = mysqli_fetch_array($result10)){
    $id9=$row['id'];
    $marka9=$row['marka'];
    $model9=$row['model'];
    $cena9=$row['cena'];
    $ekran9=$row['ekran'];
    $system9=$row['system'];
    $memory9=$row['memory'];
    $img9=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img9'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka9 $model9 </p>
   <p style='font-size:18pt'>Screen: $ekran9</p>
   <p style='font-size:18pt'>System: $system9</p>
   <p style='font-size:18pt'>Memory: $memory9 GB</p>
   <p style='font-size:18pt'>Price: $cena9 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple9' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple9'])){
            $resultat9 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka9', '$model9', '$cena9','$img9')");
        }}
        
         $result11=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '13'");
        while($row = mysqli_fetch_array($result6)){
    $id10=$row['id'];
    $marka10=$row['marka'];
    $model10=$row['model'];
    $cena10=$row['cena'];
    $ekran10=$row['ekran'];
    $system10=$row['system'];
    $memory10=$row['memory'];
    $img10=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img10'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka10 $model10 </p>
   <p style='font-size:18pt'>Screen: $ekran10</p>
   <p style='font-size:18pt'>System: $system10</p>
   <p style='font-size:18pt'>Memory: $memory10 GB</p>
   <p style='font-size:18pt'>Price: $cena10 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple10' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple10'])){
            $resultat5 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka10', '$model10', '$cena10','$img10')");
        }}
        
        
        
        
        
        
        
        
        
        
        $result12=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '5'");
        while($row = mysqli_fetch_array($result12)){
    $id11=$row['id'];
    $marka11=$row['marka'];
    $model11=$row['model'];
    $cena11=$row['cena'];
    $ekran11=$row['ekran'];
    $system11=$row['system'];
    $memory11=$row['memory'];
    $img11=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img11'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka11 $model11 </p>
   <p style='font-size:18pt'>Screen: $ekran11</p>
   <p style='font-size:18pt'>System: $system11</p>
   <p style='font-size:18pt'>Memory: $memory11 GB</p>
   <p style='font-size:18pt'>Price: $cena11 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple11' value='Add to card' onClick='window.location.reload();' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple11'])){
            $resultat = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka11', '$model11', '$cena11','$img11')");
        }}
            
            
            
            $result13=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '18'");
        while($row = mysqli_fetch_array($result13)){
    $id12=$row['id'];
    $marka12=$row['marka'];
    $model12=$row['model'];
    $cena12=$row['cena'];
    $ekran12=$row['ekran'];
    $system12=$row['system'];
    $memory12=$row['memory'];
    $img12=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img12'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka12 $model12 </p>
   <p style='font-size:18pt'>Screen: $ekran12</p>
   <p style='font-size:18pt'>System: $system12</p>
   <p style='font-size:18pt'>Memory: $memory12 GB</p>
   <p style='font-size:18pt'>Price: $cena12 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple12' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple12'])){
            $resultat12 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka12', '$model12', '$cena12','$img12')");
        }}
        
         $result14=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '17'");
        while($row = mysqli_fetch_array($result14)){
    $id13=$row['id'];
    $marka13=$row['marka'];
    $model13=$row['model'];
    $cena13=$row['cena'];
    $ekran13=$row['ekran'];
    $system13=$row['system'];
    $memory13=$row['memory'];
    $img13=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img13'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka13 $model13 </p>
   <p style='font-size:18pt'>Screen: $ekran13</p>
   <p style='font-size:18pt'>System: $system13</p>
   <p style='font-size:18pt'>Memory: $memory13 GB</p>
   <p style='font-size:18pt'>Price: $cena13 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple13' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple13'])){
            $resultat13 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka13', '$model13', '$cena13','$img13')");
        }}
        
         $result15=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '8'");
        while($row = mysqli_fetch_array($result15)){
    $id14=$row['id'];
    $marka14=$row['marka'];
    $model14=$row['model'];
    $cena14=$row['cena'];
    $ekran14=$row['ekran'];
    $system14=$row['system'];
    $memory14=$row['memory'];
    $img14=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img14'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka14 $model14 </p>
   <p style='font-size:18pt'>Screen: $ekran14</p>
   <p style='font-size:18pt'>System: $system14</p>
   <p style='font-size:18pt'>Memory: $memory14 GB</p>
   <p style='font-size:18pt'>Price: $cena14 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple14' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple14'])){
            $resultat14 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka14', '$model14', '$cena14','$img14')");
        }}
        
         $result16=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '4'");
        while($row = mysqli_fetch_array($result16)){
    $id15=$row['id'];
    $marka15=$row['marka'];
    $model15=$row['model'];
    $cena15=$row['cena'];
    $ekran15=$row['ekran'];
    $system15=$row['system'];
    $memory15=$row['memory'];
    $img15=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img15'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka15 $model15 </p>
   <p style='font-size:18pt'>Screen: $ekran15</p>
   <p style='font-size:18pt'>System: $system15</p>
   <p style='font-size:18pt'>Memory: $memory15 GB</p>
   <p style='font-size:18pt'>Price: $cena15 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple15' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple15'])){
            $resultat5 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka15', '$model15', '$cena15','$img15')");
        }}
        
        
        
        
        
        
        
        
        
        
        $result17=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '1'");
        while($row = mysqli_fetch_array($result17)){
    $id16=$row['id'];
    $marka16=$row['marka'];
    $model16=$row['model'];
    $cena16=$row['cena'];
    $ekran16=$row['ekran'];
    $system16=$row['system'];
    $memory16=$row['memory'];
    $img16=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img16'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka16 $model16 </p>
   <p style='font-size:18pt'>Screen: $ekran16</p>
   <p style='font-size:18pt'>System: $system16</p>
   <p style='font-size:18pt'>Memory: $memory16 GB</p>
   <p style='font-size:18pt'>Price: $cena16 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple16' value='Add to card' onClick='window.location.reload();' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple16'])){
            $resultat16 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka16', '$model16', '$cena16','$img16')");
        }}
            
            
            
            $result18=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '10'");
        while($row = mysqli_fetch_array($result18)){
    $id17=$row['id'];
    $marka17=$row['marka'];
    $model17=$row['model'];
    $cena17=$row['cena'];
    $ekran17=$row['ekran'];
    $system17=$row['system'];
    $memory17=$row['memory'];
    $img17=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img17'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka17 $model17 </p>
   <p style='font-size:18pt'>Screen: $ekran17</p>
   <p style='font-size:18pt'>System: $system17</p>
   <p style='font-size:18pt'>Memory: $memory17 GB</p>
   <p style='font-size:18pt'>Price: $cena17 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple17' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple17'])){
            $resultat17 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka17', '$model17', '$cena17','$img17')");
        }}
        
         $result19=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '6'");
        while($row = mysqli_fetch_array($result19)){
    $id19=$row['id'];
    $marka19=$row['marka'];
    $model19=$row['model'];
    $cena19=$row['cena'];
    $ekran19=$row['ekran'];
    $system19=$row['system'];
    $memory19=$row['memory'];
    $img19=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img19'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka19 $model19 </p>
   <p style='font-size:18pt'>Screen: $ekran19</p>
   <p style='font-size:18pt'>System: $system19</p>
   <p style='font-size:18pt'>Memory: $memory19 GB</p>
   <p style='font-size:18pt'>Price: $cena19 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple19' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple19'])){
            $resultat19 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka19', '$model19', '$cena19','$img19')");
        }}
        
         $result20=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '2'");
        while($row = mysqli_fetch_array($result20)){
    $id20=$row['id'];
    $marka20=$row['marka'];
    $model20=$row['model'];
    $cena20=$row['cena'];
    $ekran20=$row['ekran'];
    $system20=$row['system'];
    $memory20=$row['memory'];
    $img20=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img20'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka20 $model20 </p>
   <p style='font-size:18pt'>Screen: $ekran20</p>
   <p style='font-size:18pt'>System: $system20</p>
   <p style='font-size:18pt'>Memory: $memory20 GB</p>
   <p style='font-size:18pt'>Price: $cena20 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple20' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple20'])){
            $resultat20 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka20', '$model20', '$cena20','$img20')");
        }}
        
         $result21=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '9'");
        while($row = mysqli_fetch_array($result21)){
    $id51=$row['id'];
    $marka51=$row['marka'];
    $model51=$row['model'];
    $cena51=$row['cena'];
    $ekran51=$row['ekran'];
    $system51=$row['system'];
    $memory51=$row['memory'];
    $img51=$row['img'];
            
            echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img51'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka51 $model51 </p>
   <p style='font-size:18pt'>Screen: $ekran51</p>
   <p style='font-size:18pt'>System: $system51</p>
   <p style='font-size:18pt'>Memory: $memory51 GB</p>
   <p style='font-size:18pt'>Price: $cena51 zl</p>
   <form  action=''  method='post'>
   <input type='submit' name='add_apple51' value='Add to card' id='knopka'>
   </form>
   </aside>
   <hr style='border-width: 2px '>";
        
        if(isset($_POST['add_apple51'])){
            $resultat51 = mysqli_query($conn, "INSERT INTO ".$login." (`id`, `phone_name`, `model`, `prise`, `image`) VALUES (NULL, '$marka51', '$model51', '$cena51','$img51')");
        }}
        
        
        
        
        
        
        
            CloseCon($conn);
        //$id - $marka - $model - $cena - $ekran - $system - $memory - 
        
 
    ?>
    
       
       
       
       </div>
    
    <div id="box3">
        <p>Contact Us</p>
        <table id="table_kontakt">
                <tr>
                    <td>Phone number:</td>
                    <td>E-Mail:</td>
                    <td>Adres:</td>
                </tr>
                <tr>
                    <td><img src="assets/img/phone_symbol_2-512.png" style="height: 50px">505 358 033 / 793 506 565 </td>
                    <td><img src="assets/img/img_386071.png" style="height: 50px">smartphoneworld@gmail.com</td>
                    <td><img src="assets/img/address-icon-1.jpg" style="height: 50px">Krakowska 68,
42-202 Częstochowa</td>
                </tr>
            </table>
    </div>
  
  
    
    
   


</body>
</html>