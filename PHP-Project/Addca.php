<?php
$cname =$_POST["cname"];//
$cmodel=$_POST["cmodel"];//
$rno =$_POST["rno"];//
$owner_name =$_POST["owner_name"];//
$OwnerCNIC =$_POST["OwnerCNIC"];
$CarCo =$_POST["CarCo"];//
$Extrad =$_POST["Extrad"];
function savedata($cname,$cmodel,$rno,$owner_name,$OwnerCNIC,$CarCo,$Extrad){
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
            $time=date("h:i:s");
            $date=date("Y-m-d");
            $query="INSERT INTO detail(Car_Name,Car_Model,Registration_Number,Date_of_Entry,Time_of_Entry,Owner_Name,Owner_CNIC_Number,Car_Color,Extra_Details) VALUES('$cname','$cmodel','$rno','$date','$time','$owner_name','$OwnerCNIC','$CarCo','$Extrad')";
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
                  Record Inserted Successfully
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=Add Item.php');
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
                header('Refresh: 1; url=Add Item.php');
            }
        }
}
if (isset($_POST["submit"]))
{
    if(preg_match("/^([A-Za-z]+)$/",$cname)==1)
    {               
        if(preg_match("/^([A-Za-z0-9]+)$/",$cmodel)==1)
        {
            if(preg_match("/^([A-Za-z0-9]+)$/",$rno)==1)
            {
                if(preg_match("/^([a-zA-Z' ]+)$/",$owner_name)==1)
                {
                    if(preg_match("/^([A-Za-z]+)$/",$CarCo)==1)
                    {
                        savedata($cname,$cmodel,$rno,$owner_name,$OwnerCNIC,$CarCo,$Extrad);
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
                        Please Insert Valid Car Color
                        </div>
                        </body>
                        </html>';
                        header('Refresh: 1; url=Add Car.php');
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
                        Please Insert Valid Car Owner Name
                        </div>
                        </body>
                        </html>';
                        header('Refresh: 1; url=Add Car.php');
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
                        Please Insert Valid Car Number
                        </div>
                        </body>
                        </html>';
                        header('Refresh: 1; url=Add Car.php');
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
                        Please Insert Valid Car Model
                        </div>
                        </body>
                        </html>';
                        header('Refresh: 1; url=Add Car.php');
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
                        Please Insert Valid Car Name
                        </div>
                        </body>
                        </html>';
                        header('Refresh: 1; url=Add Car.php');
    }
}
if(isset($_POST["back"]))
    {
        header("Location: Dashboard.php");
    }
?>