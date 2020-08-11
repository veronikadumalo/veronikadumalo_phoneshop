<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Smartphone World</title>
    <link rel="shortcut icon" href="assets/img/images.jpg" />
    <link rel="stylesheet" href="assets/style/norm.css" />
    <link href="style/style.css" type="text/css" rel="stylesheet">
 <script>
function myFunction() {
  alert("Sing in or Create Account!");
}
</script>   

</head>
<body style="font-family: 'Courier New', Courier, monospace;">
   <div id= "menu">
       <p><a href="index.html">Smartphone World</a></p>
 
       
    

<nav role="navigation">
  <ul>
    <li style="margin-left: 13%;"><a href="samsung.php">Samsung</a></li>
    <li style="margin-left: 5%;"><a href="apple.php">Apple</a></li>
      <li style="margin-left: 5%;"><a href="xiaomi.php">Xiomi</a></li>
      <li style="margin-left: 5%;"><a href="huawei.php">Huawei</a></li>
        <li style="margin-left: 5%;"><a href="all.php">All</a></li>
        <li style="margin-left: 15%;"><a href="" onClick="myFunction()"><img src="assets/img/shopping-cart--v2.png" style="height: 35px;"></a></li>
    <li style="margin-left: 3%;display: inline-block; "><a href=""><img src="assets/img/computer-icons-google-account-icon-design-login-others-png-clip-art.png" style="height: 35px;"></a>
      <ul class="dropdown">
        <li><a href="http://localhost/some/sing_in.php" >Sign in</a></li>
        <li><a href="http://localhost/some/create_account.php" >Create Account</a></li>
        
      </ul>
    </li>
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
    include ("connect.php");
    $conn = OpenCon();
    $result = mysqli_query($conn, "SELECT * FROM `phone` WHERE `marka` = 'Samsung'");
    while($row = mysqli_fetch_array($result)){
 $id=$row['id'];
 $marka=$row['marka'];
 $model=$row['model'];
 $cena=$row['cena'];
 $ekran=$row['ekran'];
 $system=$row['system'];
 $memory=$row['memory'];
 $img=$row['img'];

 echo "<img style=' width: 40%;
    height: 500px;
    margin-left:100px; ' src='assets/Baza telefony/$img'>
   <aside style='width: 50%;
        float: right;
        margin-top: 3%;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:25pt;
   
   '> $marka $model </p>
   <p style='font-size:18pt'>Screen: $ekran</p>
   <p style='font-size:18pt'>System: $system</p>
   <p style='font-size:18pt'>Memory: $memory GB</p>
   <p style='font-size:18pt'>Price: $cena zl</p>
   <button type='button' onclick='myFunction()' style='color:black'>Add to card</button>
   </aside>
   <hr style='border-width: 2px '>
    ";
        //$id - $marka - $model - $cena - $ekran - $system - $memory - 
      
 }
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