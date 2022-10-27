<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Elearning</title>
    <link rel="stylesheet" href="Css/lineicons.min.css">
    <link rel="stylesheet" href="Css/Style.css">
    <link rel="shortcut icon" type="image/x-icon" href="Css/logo_pens.png" >

</head>
<body>
 <div class="sign-div">
     <div class="logo"></div>
     <div class="title">ETHOL</div>
     <form action="cek_regis.php" method="post">
     <div class="sign-up">
         <div class="username">
             <i class="lni lni-user"></i>
             <input type="username" name="nama" placeholder="name">
         </div>
         <div class="username">
             <i class="lni lni-user"></i>
             <input type="username" name="level" placeholder="status">
         </div>
         <div class="username">
            <i class="lni lni-envelope"></i>
            <input type="username" name="username" placeholder="username">
        </div>
        <div class="password">
            <i class="lni lni-lock"></i>
            <input type="password" name="password" placeholder="password">
        </div>
     </div>
     
     <button type="submit" name="submit" class="buttons-login-regist">Sign Up</button>
     </form>
     <div class="link">
         <a href="#">Already have an account?</a> or
         <a href="Login_Form.php">Login</a>
     </div>

 </div>
    

</body>
</html>