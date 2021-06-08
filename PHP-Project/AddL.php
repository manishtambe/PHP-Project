<?php
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    if(isset($_POST["login"]))
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
            $query="SELECT * FROM logindb WHERE Username= '$username' AND Password = '$password' AND Email = '$email'";
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0)
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
                  Login Successful ! You Are Redireted To The Dashboard Page. 
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Dashboard.php');
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
                  <span onclick="this.parentElement.style.display="none";"></span> Error while login'.'"'.
                  $conn->error.'"'.'
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Login.php');
            }
        }      
    }
?>