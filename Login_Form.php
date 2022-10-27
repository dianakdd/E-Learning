
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - Elearning</title>
    <link rel="stylesheet" href="Css/lineicons.min.css">
    <link rel="stylesheet" href="Css/Style.css">
    <link rel="shortcut icon" type="image/x-icon" href="Css/logo_pens.png" >

</head>
<body>
<form action="cek_login.php" method="post">
 <div class="login-div">
     <div class="logo"></div>
     <div class="title">ETHOL</div>
     <div class="login-in">
         <div class="username">
             <i class="lni lni-user"></i>
             <input type="username" placeholder="username"name="username">
         </div>
        <div class="password">
            <i class="lni lni-lock"></i>
            <input type="password" placeholder="password"name="password">
        </div>
     </div>
     
     <button class="buttons-login-regist">login</button>
     <div class="link">
         <a >Create account?</a> or
         <a href="regis_form.php">sign up</a>
     </div>

 </div>   
</form>
</body>
</html>
