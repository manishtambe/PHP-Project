<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gmail=$_POST["gmail"];
$username=$_POST["username"];
$password=$_POST["password"];
function savedata($fname,$lname,$gmail,$username,$password){
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
            $query="insert into logindb(Fname,Lname,Email,Username,Password)VALUES('$fname','$lname','$gmail','$username','$password')";
            if(mysqli_query($conn,$query))
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
                  Record Inserted Successfully ! You Are Redireted To The Login Page. 
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
                  <span onclick="this.parentElement.style.display="none";"></span>'.'"'.
                  $conn->error.'"'.'
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Add User.php');
            }
        }       
}
if(isset($_POST["add"]))
{
    if(preg_match("/^([a-zA-Z']+)$/",$fname)==1)
    {
        if(preg_match("/^([a-zA-Z']+)$/",$lname)==1)
        {
            if(preg_match("/^([A-Za-z][A-Za-z0-9]{4,31})$/",$username)==1)
            {
                if(preg_match("/^(\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*)$/",$password)==1)
                {
                    savedata($fname,$lname,$gmail,$username,$password);
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
                    header('Refresh: 1; url=Add User.php');
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
                Please Choose Valid Username
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Add User.php');
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
            Please Insert Valid Lastname
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=Add User.php');
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
        Please Insert Valid Firstname
        </div>
        </body>
        </html>';
        header('Refresh: 1; url=Add User.php');
    }
}
?>