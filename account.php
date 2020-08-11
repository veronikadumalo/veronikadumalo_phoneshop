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
    
    
    <div style="background-color: white;
                width:100%;
                height:500px;">
        <p style="font-size:30pt;
                  text-align: center;
                  padding-top:4%">My Account</p>
        
        <?php
        $fd = fopen("log.txt", 'r') or die("Error");
        $str = '';
            while(!feof($fd))
                {
                    $str = htmlentities(fgets($fd));
                }
        fclose($fd);
        
        $conn=OpenCon();
        $result= mysqli_query($conn, "Select * from `client` where `login` = '$str'");
         
         while($row = mysqli_fetch_array($result)){
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $login = $row['login'];
        $email= $row['email'];
             
        echo "
            <form  method='post' style='width:70%;margin-left:35%;'>
            <label for='first_name' style=' font-size:20pt;'>First name:&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='first_name' value='$first_name' ><br><br>
            <label for='last_name' style=' font-size:20pt;'>Last name:&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='last_name' value='$last_name' ><br><br>
            <label for='login' style=' font-size:20pt;'>Login:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='login' value='$login' readonly ><br><br>
            <label for='email' style=' font-size:20pt;'>Email:&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
            <input id='input_text' type='text' required  style='margin-left: 1%; font-size:20pt;' name='email' value='$email' ><br><br>
            <input type='submit' name='button1'
                class='button' value='Save' style='background: rgba(204, 204, 204, 0.7);

  border: none;
  color: black;
  padding: 20px 70px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
  
  margin-top:2%;
    '/>
            </form>

        
        ";}
     
     
        
        if(array_key_exists('button1', $_POST)) { 
            button1();
            header("refresh: 0;");
            
        } 
        function button1() { 
             
             if (isset($_POST['first_name'])) { $first_name_new = $_POST['first_name']; if ($first_name_new == '') { unset($first_name_new);} } 
if (isset($_POST['last_name'])) { $last_name_new = $_POST['last_name']; if ($last_name_new == '') { unset($last_name_new);} } 
if (isset($_POST['email'])) { $email_new = $_POST['email']; if ($email_new == '') { unset($email_new);} } 
    if (isset($_POST['login'])) { $login_new = $_POST['login']; if ($login_new == '') { unset($login_new);} } 
    
$first_name_new = stripslashes($first_name_new);
    $first_name_new = htmlspecialchars($first_name_new);
$last_name_new = stripslashes($last_name_new);
    $last_name_new = htmlspecialchars($last_name_new);
$email_new = stripslashes($email_new);
    $email_new = htmlspecialchars($email_new);
    $login_new = stripslashes($login_new);
    $login_new = htmlspecialchars($login_new);


 $first_name_new = trim($first_name_new);
 $last_name_new = trim($last_name_new);
 $email_new = trim($email_new);
    $login_new = trim($login_new);
    //include("connect.php");
    $conn2=OpenCon();
    
    $result1 = mysqli_query($conn2,"UPDATE `client` SET `first_name`='$first_name_new', `last_name`='$last_name_new', `email`='$email_new' where `login` =   '$login_new' ");
    
      if ($result1=='TRUE')
    {
    
 $myFile = "data.txt";
unlink($myFile);
$fp = fopen($myFile, 'a');       
fwrite($fp, $first_name_new);
fwrite($fp, " ");
fwrite($fp, $last_name_new);
fclose($fp);
      }
            CloseCon($conn2);
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