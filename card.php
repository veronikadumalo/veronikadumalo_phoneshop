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
        <li style="margin-left: 10%;"><a href=""><img src="assets/img/shopping-cart--v2.png" style="height: 35px;"></a></li>
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
    
    
    <div style="background-color: white;
                width:100%;
                height:auto;">
        <p style="font-size:30pt;
                  text-align: center;
                  padding-top:4%">Cart</p>
        
        <?php
        $fd = fopen("log.txt", 'r') or die("Error");
        $str = '';
            while(!feof($fd))
                {
                    $login = htmlentities(fgets($fd));
                
                }
        fclose($fd);
        
        $conn=OpenCon();
        $result= mysqli_query($conn, "Select * from `".$login."`");
         
         while($row = mysqli_fetch_array($result)){
        $name = $row['phone_name'];
        $model = $row['model'];
        $cena= $row['prise'];
        $img= $row['image'];
             
        echo "<hr style='border-width: 2px '>
        <img style=' width: 20%;
    height: 200px;
    margin-left:300px; ' src='assets/Baza telefony/$img'>
   <aside style='width: 50%;
        float: right;
        margin-right: 3%;'>
   <p style='text-align: center;
   font-size:20pt;
   '> $name $model </p>
   <p style='font-size:18pt'>Price: $cena zl</p>
    <form  action=''  method='post'>
   <input type='submit' name='Delete' value='Delete' onClick='window.location.reload();'>
   </form>
   </aside>
   <hr style='border-width: 2px '>"
            ;}
        $shopping_price = 20;
        $result2 = mysqli_query($conn, "Select SUM(prise) from `".$login."`");
        while($row = mysqli_fetch_array($result2)){
            $sumary_price=$row[0]+$shopping_price;
        echo (" <hr style='border-width: 2px '>
        <p style='font-size:30pt;
                  text-align: center;
                  padding-top:2%'>Shopping Address</p> 
        <form  method='post' >
            <label for='Full Name' style=' font-size:20pt;margin-left: 20%'>Full Name:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='full_name' value='' ><br><br>
            <label for='Country' style=' font-size:20pt;margin-left: 20%'>Country:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='country' value='' ><br><br>
            <label for='City' style=' font-size:20pt;margin-left: 20%'>City:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='city' value='' ><br><br>
            <label for='State' style=' font-size:20pt; margin-left: 20%'>State: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='state' value='' ><br><br>
            <label for='Post Code' style=' font-size:20pt;margin-left: 20%'>Post Code:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='post_code' value='' ><br><br>
            <label for='Street Address' style=' font-size:20pt;margin-left: 20%'>Street Address:&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='street_address' value='' ><br><br>
           
            
            
            <hr style='border-width: 2px '>
             <p style='font-size:30pt;
                  text-align: center;
                  padding-top:2%'>Payment Method</p>
                 
                  <label for='Card Number' style=' font-size:20pt;margin-left: 20%'>Card Number:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='card_number' value='' ><br><br>
            
                 
                 
                 <hr style='border-width: 2px '>
                 
                 <p style='font-size:30pt;
                  text-align: center;
                  padding-top:2%'>Order Summary</p>
                  <p style='font-size:20pt;
                  text-align: center;
                  padding-top:1%'>Subtotal: $row[0] zł</p>
                  <p style='font-size:20pt;
                  text-align: center;
                  padding-top:1%'>Delivery: $shopping_price zł</p>
                  <p style='font-size:20pt;
                  text-align: center;
                  padding-top:1%'>Order Total: $sumary_price zł</p>
                
                 <input type='submit' name='order' value='Place Order' style= 'background: rgba(204, 204, 204, 0.7);

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
  '>
  
  </form>
  <hr style='border-width: 2px '>
                 
                 ");
            
            if(isset($_POST['order'])){
            
                
               
                $result_count = mysqli_query($conn, "SELECT COUNT(id) from `".$login."`");
                $row_count = mysqli_fetch_array($result_count);
                
                     
                 
                if ($row_count[0] > 0){
                    $full_name= htmlspecialchars($_POST['full_name']);
                    $country= htmlspecialchars($_POST['country']);
                    $city= htmlspecialchars($_POST['city']);
                    $state= htmlspecialchars($_POST['state']);
                    $post_code= htmlspecialchars($_POST['post_code']);
                    $street_address= htmlspecialchars($_POST['street_address']);
                    $card_number= htmlspecialchars($_POST['card_number']);
                    $fd = fopen("$login.order.txt", 'a') or die("не удалось создать файл");
                    
                    fwrite($fd, $full_name);
                    fwrite($fd, $city);
                    fwrite($fd, $country);
                    fwrite($fd, $state);
                    fwrite($fd, $post_code);
                    fwrite($fd, $street_address);
                    fwrite($fd, $card_number);
                    fwrite($fd, $model);
                    fclose($fd);
                    $result_delete = mysqli_query($conn, "DELETE from `".$login."`");
                    echo "<script type='text/javascript'>alert('Thanks for Your order');window.open('index_log.php');</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Your card is empty');</script>";
                }
                 
                 
                 
                 
                
                
               
                
            }
            
            }
     
     
        
       
            CloseCon($conn2);
        
         
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