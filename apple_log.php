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
    
    
    $result2=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '6'");
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
            
            
            
            $result3=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '7'");
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
        
         $result4=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '8'");
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
        
         $result5=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '9'");
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
        
         $result6=mysqli_query($conn, "SELECT * FROM `phone` WHERE `id` = '10'");
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