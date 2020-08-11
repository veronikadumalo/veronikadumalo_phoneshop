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
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    
if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

    include ("connect.php");
    $conn = OpenCon();
 
$result = mysqli_query($conn,"SELECT * FROM `client` WHERE login='$login'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    
    exit ("<p id='p_save' >Sorry, the login or password you entered is incorrect.<p>");
    }
    else {
    
    if ($myrow['password']==$password) {
    
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    $first_name=$myrow['first_name'];
    $last_name=$myrow['last_name'];
    $login=$myrow['login'];
    
    echo "<p id='p_save' >You are successfully logged in! <a href='index_log.php'  style='color:white'>Home</a></p>";

        
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
    

    exit ("<p id='p_save' >Sorry, the login or password you entered is incorrect.<p>");
    }
    }
    CloseCon($conn);
    ?>
     </div>    
    </body>
</html>