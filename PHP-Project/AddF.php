<?php
    session_start();
    $email=$_POST["email"];
    $otp=$_POST["otp"];
    
    if(isset($_POST["sendotp"]))
    {
        if($email=="")
        {
            echo '<!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                .alert {
                  padding: 20px;
                  background-color: #00C8F4;
                  color: #212830;
                }
                body{
                    background-color: #212830;
                }
                </style>
                </head>
                <body>
                <div class="alert">
                  <span onclick="this.parentElement.style.display="none";"></span>
                  Please Enter Email Id To Verify Account. 
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Forgot Password.php');
        }
        else
        {
            $host="localhost";
            $user="root";
            $pass="";
            $dbname="mmt_garages";
            $conn=mysqli_connect($host,$user,$pass,$dbname);
            if(! $conn)
            {
                die("Connection Failed".mysqli_connect_error());
            }
            else
            {
                $query="SELECT * FROM logindb WHERE Email = '$email'";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0)
                {
                    $rndno=rand(100000, 999999);
                    $_SESSION['randno']=$rndno;
                    $to=$email;
                    $subject = "Reg, Password Reset From MMT Garages";
                    $txt = "Your OTP For Password Reset Request: ".$rndno." And Please Do Not Share It With Any One !";
                    $headers = "From: mangeshtambe207@gmail.com";
                    mail($to,$subject,$txt,$headers);
                    echo '<!DOCTYPE html>
                    <html>
                    <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <style>
                    .alert {
                    padding: 20px;
                    background-color: #00C8F4;
                    color: #212830;
                    }
                    body{
                        background-color: #212830;
                    }
                    </style>
                    </head>
                    <body>
                    <div class="alert">
                    <span onclick="this.parentElement.style.display="none";"></span>
                    OTP Sent Successfully Please Verify The OTP !
                    </div>
                    </body>
                    </html>';
                    header('Refresh: 1; url=Forgot Password.php');
                }
                else
                {
                    echo '<!DOCTYPE html>
                    <html>
                    <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <style>
                    .alert {
                    padding: 20px;
                    background-color: #00C8F4;
                    color: #212830;
                    }
                    body{
                        background-color: #212830;
                    }
                    </style>
                    </head>
                    <body>
                    <div class="alert">
                    <span onclick="this.parentElement.style.display="none";"></span> Error while sending an OTP'.'"'.
                    $conn->error.'"'.'
                    </div>
                    </body>
                    </html>';
                    header('Refresh: 1; url=Forgot Password.php');
                }
        }      
    }
}
    if(isset($_POST["verify"]))
    {
        if($otp=="")
        {
            echo '<!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                .alert {
                  padding: 20px;
                  background-color: #00C8F4;
                  color: #212830;
                }
                body{
                    background-color: #212830;
                }
                </style>
                </head>
                <body>
                <div class="alert">
                  <span onclick="this.parentElement.style.display="none";"></span>
                  Please Enter OTP To Verify Account. 
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Forgot Password.php');
        }
        else
        {
            if($otp==$_SESSION['randno'])
            {
                echo '<!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                .alert {
                  padding: 20px;
                  background-color: #00C8F4;
                  color: #212830;
                }
                body{
                    background-color: #212830;
                }
                </style>
                </head>
                <body>
                <div class="alert">
                  <span onclick="this.parentElement.style.display="none";"></span>
                  OTP Verified Successfully ! You Will Be Redirected To The Chnage Password Page. 
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Reset.php');
            }
            else
            {
                echo '<!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                .alert {
                  padding: 20px;
                  background-color: #00C8F4;
                  color: #212830;
                }
                body{
                    background-color: #212830;
                }
                </style>
                </head>
                <body>
                <div class="alert">
                  <span onclick="this.parentElement.style.display="none";"></span>
                  Please Enter Valid OTP ! 
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Forgot Password.php');
            }
        }
    }
?>