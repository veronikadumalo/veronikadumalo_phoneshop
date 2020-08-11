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
       <p><a href="index.html">Smartphone World</a></p>
 
       
    

<nav role="navigation">
  <ul>
    <li style="margin-left: 13%;"><a href="#">Apple</a></li>
    <li style="margin-left: 5%;"><a href="">Samsung</a></li>
      <li style="margin-left: 5%;"><a href="">Xiomi</a></li>
        <li style="margin-left: 5%;"><a href="">All</a></li>
        <li style="margin-left: 25%;"><a href=""><img src="assets/img/shopping-cart--v2.png" style="height: 35px;"></a></li>
    <li style="margin-left: 3%;display: inline-block; "><a href=""><img src="assets/img/computer-icons-google-account-icon-design-login-others-png-clip-art.png" style="height: 35px;"></a>
      <ul class="dropdown">
        <li><a href="http://localhost/some/sing_in.php" >Sign in</a></li>
        <li><a href="http://localhost/some/create_account.php" >Create Account</a></li>
        
      </ul>
    </li>
  </ul>
</nav> 
       
    </div>
<div id="box2_save">
<?php

if (isset($_POST['first_name'])) { $first_name = $_POST['first_name']; if ($first_name == '') { unset($first_name);} } 
if (isset($_POST['last_name'])) { $last_name = $_POST['last_name']; if ($last_name == '') { unset($last_name);} } 
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
$first_name = stripslashes($first_name);
    $first_name = htmlspecialchars($first_name);
$last_name = stripslashes($last_name);
    $last_name = htmlspecialchars($last_name);
$email = stripslashes($email);
    $email = htmlspecialchars($email);
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);

 $first_name = trim($first_name);
 $last_name = trim($last_name);
 $email = trim($email);
    $login = trim($login);
    $password = trim($password);
 
    include ("connect.php");
    $conn = OpenCon();
    $result = mysqli_query($conn,"SELECT id FROM `client` WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("<p id='p_save' >Sorry, the login you entered is already registered. Enter another login.</p>");
    }

    $result2 = mysqli_query ($conn,"INSERT INTO `client` (`id`, `first_name`, `last_name`, `login`, `email`, `password`) VALUES (NULL, '$first_name', '$last_name', '$login', '$email', '$password');");

    if ($result2=='TRUE')
    {
    echo "<p id='p_save' >You are successfully registered! <a href='index_log.php' style='color:white'>Home</a></p>";
$myFile = "data.txt";
unlink($myFile);
$fp = fopen($myFile, 'a');       
fwrite($fp, $first_name);
fwrite($fp, " ");
fwrite($fp, $last_name);
fclose($fp);
        
$myFile_log = "log.txt";
unlink($myFile_log);
$fp_log = fopen($myFile_log, 'a');       
fwrite($fp_log, $login);
fclose($fp_log);        
    }
 else {
    echo "<p id='p_save' >Error! You are not registered.</p>";
    }
    $result3 =  mysqli_query($conn,"CREATE TABLE ".$login." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
phone_name VARCHAR(30) NOT NULL,
model VARCHAR(30) NOT NULL,
prise VARCHAR(30) NOT NULL,
image VARCHAR(30) NOT NULL
);");
    
    CloseCon($conn);
    ?>
    </div>    
    </body>
</html>