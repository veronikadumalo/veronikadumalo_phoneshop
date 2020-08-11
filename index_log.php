<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Smartphone World</title>
    <link rel="shortcut icon" href="assets/img/images.jpg" />
    <link rel="stylesheet" href="assets/style/norm.css" />
    <link href="style/style.css" type="text/css" rel="stylesheet">
   

</head>
<body>
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
    <div id="box1">
         <p>All life in one phone</p>  
        <button type="button" onclick="location.href='http://localhost/some/all_log.php'">Buy now</button>
    </div>
    
    
   <div id="box2">
       <h1>New Galaxy S20 | S20+ | S20 Ultra 5G </h1>
       <p style="text-align: center; font-size: 25pt;">Soon</p>
       <h1 style="margin-top: 650px">This is the phone that will change photography</h1>
       
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
  
  
    
    
    
   <!-- <form action="">
        <fieldset>
           
            <h1>Create Account:</h1>
            <br><br>
    <input id="input_text" type="text" style="margin-right: 4%" name="first_name" placeholder="First Name" autofocus>
    
    <input id="input_text" type="text" name="last_name" placeholder="Last Name" >
    <br><br><br>
    <input id="input_other" type="email" name="email" placeholder="Email" >
    <br><br><br>
    <input id="input_other" type="password" name="password" placeholder="Password" >
    <br><br><br>
    <input id="input_other" type="password" name="conf_password" placeholder="Confirm Password" >
    <br><br><br>
    <input  type="checkbox" name="check" value="Car"> Check here to indicate that you have read and agree to the terms of the AWS Customer Agreement
    <br><br>
    <input id="button" type="submit" value="Register Now" >
            <br><br>
             </fieldset>
        </form> -->


</body>
</html>