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
    </div>
    
    <form action="save_user.php"  method="post">
        <fieldset>
           
            <h1>Create Account:</h1>
            <br><br>
    <input id="input_text" type="text" required style="margin-right: 4%" name="first_name" placeholder="First Name" autofocus size="15" maxlength="15">
    
    <input id="input_text" type="text" required name="last_name" placeholder="Last Name" size="15" maxlength="15">
    <br><br><br>
    <input id="input_other" type="text" required name="login" placeholder="Login" size="15" maxlength="15" >
    <br><br><br>
    <input id="input_other" type="email" required name="email" placeholder="Email" size="30" maxlength="30">
    <br><br><br>
    <input id="input_other" type="password" required name="password" placeholder="Password" size="15" maxlength="15">
    <br><br><br>
   
    <input  type="checkbox" required name="check" value="Car"> Check here to indicate that you have read and agree to the terms of the AWS Customer Agreement
    <br><br>
    <input id="button" type="submit" value="Create Account" >
            <br><br>
             </fieldset>
        </form> 


</body>
</html>