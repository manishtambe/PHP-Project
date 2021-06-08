<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="Forgot Password.css">
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="Login.php">
                <img src="previous.png" alt="previous" class="previous">
            </a>
            <img src="logo11.png" alt="logo">
        </div>
        <div class="line1">
            <b><p>VERIFY YOUR  ACCOUNT</p></b>
        </div>
        <div class="line2">
            <p>Recover your account</p>
        </div>
        <div class="box">
            <form action="AddF.php" method="post" autocomplete="off" class="check">
                <div class="block">
                    <img src="gmail.png" alt="gmail">
                    <input type="email" name="email"/>
                </div>  
                <div class="bt1">
                    <input type="submit" value="Send OTP" class="sub1" name="sendotp">
                </div>
                <div class="block">
                    <img src="OTP.png" alt="password">
                    <input type="number" name="otp"/>
                </div>
                <div class="bt1">
                    <input type="submit" value="VERIFY" class="sub" name="verify">
                </div>
            </form>
        </div>
    </div>
</body>
</html>