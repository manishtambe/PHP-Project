<?php
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
function updatedata($username,$password,$cpassword)
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
        $query="UPDATE logindb SET Password='$cpassword' WHERE Username= '$username'";
        $result=mysqli_query($conn,$query);
        if(mysqli_affected_rows($conn)==1)
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
            Password Reset Successful ! You Are Redireted To The Login Page. 
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=Login.php');
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
            <span onclick="this.parentElement.style.display="none";"></span> Error while Reseting The Password'.'"'.
            $conn->error.'"'.'
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=Reset.php');
            }
        }  
}
function checkdata($username,$password,$cpassword)
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
        $query="SELECT * FROM logindb WHERE Username= '$username'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0)
        {
            updatedata($username,$password,$cpassword);
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
            <span onclick="this.parentElement.style.display="none";"></span> Error while Reseting The Password'.'"'.
            $conn->error.'"'.'
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=Reset.php');
            }
        }  
}
if(isset($_POST["reset"]))
{
    if($password==$cpassword)
    {
        if(preg_match("/^(\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*)$/",$password)==1)
        {
            checkdata($username,$password,$cpassword);
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
                Please Choose Valid Password
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=Reset.php');
        }
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
                  Password Not Match ! Please Try Again !
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Reset.php');
    }
}
?>