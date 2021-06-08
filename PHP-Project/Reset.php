<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset</title>
    <link rel="stylesheet" href="Reset.css">
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
</head>
<body>
    <div class="container">
        <div class="logo">
        <a href="Forgot Password.php">
            <img src="previous.png" alt="previous" class="previous">
        </a>
            <img src="logo11.png" alt="logo">
        </div>
        <div class="line1">
            <b><p>Reset Account Password</p></b>
        </div>
        <div class="line2">
            <p>Please Insert Valid Details</p>
        </div>
        <div class="box">
            <form action="AddR.php" method="post" autocomplete="off" class="check">
            <div class="block">
                <b><label class="lb1">Username</label><b>
                <input type="text" name="username" required/>
            </div>
            <div class="block">
                <b><label class="lb1">New Password</label><b>
                <input type="password" name="password" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Confirm Password</label><b>
                <input type="password" name="cpassword" required/>
            </div>
            <div class="bt1">
                    <input type="submit" value="Reset" name="reset" class="sub">
            </div>
            </form>
        </div>
    </div>
</body>
</html>