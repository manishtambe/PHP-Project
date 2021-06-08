<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo11.png" alt="logo">
        </div>
        <div class="line1">
            <b><p>LOGIN  TO  YOUR  ACCOUNT</p></b>
        </div>
        <div class="line2">
            <p>Get Access To Account</p>
        </div>
        <div class="box">
            <form action="AddL.php" method="post" autocomplete="off" class="check">
                <div class="block">
                    <img src="Username.png" alt="username">
                    <input type="text" name="username" required/>
                </div>
                <div class="block">
                    <img src="password.png" alt="password">
                    <input type="password" name="password" required/>
                </div>
                <div class="block">
                    <img src="mail.png" alt="mail">
                    <input type="email" name="email" required/>
                </div>
                <div class="bt1">
                    <input type="submit" value="Submit" name="login" class="sub">
                </div>
                <div class="bt2">
                    <input type="button" value="Forgot my password :(" class="sub1" onclick="window.location='Forgot Password.php'"/>
                </div>
                <div class="bt3">
                    <input type="button" value="I don't have an account" class="sub2" onclick="window.location='Add User.php'"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>