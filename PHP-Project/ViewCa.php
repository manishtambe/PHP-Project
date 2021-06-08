<?php
$Car_Code =$_POST["Car_Code"];
$cname =$_POST["cname"];//
$cmodel=$_POST["cmodel"];//
$rno =$_POST["rno"];//
$owner_name =$_POST["owner_name"];//
$OwnerCNIC =$_POST["OwnerCNIC"];
$CarCo =$_POST["CarCo"];//
$Extrad =$_POST["Extrad"];
$caret =$_POST["caret"];//
//$carexitt=$_POST["carexitt"];
$cared=$_POST["cared"];//
//$carexitd=$_POST["carexitd"];
function deletedata($Car_Code,$cname,$cmodel,$rno,$owner_name,$OwnerCNIC,$CarCo,$Extrad,$caret,$cared)
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
        $query="DELETE FROM detail WHERE Car_Code='$Car_Code' AND Car_Name='$cname' AND Car_Model='$cmodel' AND Registration_Number='$rno' AND Date_of_Entry='$cared' AND Time_of_Entry='$caret' AND Owner_Name='$owner_name' AND Owner_CNIC_Number='$OwnerCNIC' AND Car_Color='$CarCo' AND Extra_Details='$Extrad'";
        mysqli_query($conn,$query);
                    
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
            Record deleted sucessful
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=View Car.php');
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
            Error While Deleting A Record'.'"'.
            $conn->error.'"'.' 
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=View Car.php');
        }
    }
}
function updatedata($Car_Code,$cname,$cmodel,$rno,$owner_name,$OwnerCNIC,$CarCo,$Extrad,$caret,$cared)
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
        $query="UPDATE detail SET Car_Code='$Car_Code',Car_Name='$cname',Car_Model='$cmodel',Registration_Number='$rno',Date_of_Entry='$cared',Time_of_Entry='$caret',Owner_Name='$owner_name',Owner_CNIC_Number='$OwnerCNIC',Car_Color='$CarCo',Extra_Details='$Extrad' WHERE Car_Code=$Car_Code";
        mysqli_query($conn,$query);
                    
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
            Record updated sucessful
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=View Car.php');
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
            Error While Updating A Record'.'"'.
            $conn->error.'"'.' 
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=View Car.php');
        }
    }
}
if(isset($_POST["edit"]))
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
                        updatedata($Car_Code,$cname,$cmodel,$rno,$owner_name,$OwnerCNIC,$CarCo,$Extrad,$caret,$cared);
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
                        header('Refresh: 1; url=View Car.php');
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
                        header('Refresh: 1; url=View Car.php');
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
                        header('Refresh: 1; url=View Car.php');
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
                        header('Refresh: 1; url=View Car.php');
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
                        header('Refresh: 1; url=View Car.php');
    }
}
if(isset($_POST["bin"]))
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
                        deletedata($Car_Code,$cname,$cmodel,$rno,$owner_name,$OwnerCNIC,$CarCo,$Extrad,$caret,$cared);
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
                        header('Refresh: 1; url=View Car.php');
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
                        header('Refresh: 1; url=View Car.php');
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
                        header('Refresh: 1; url=View Car.php');
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
                        header('Refresh: 1; url=View Car.php');
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
                        header('Refresh: 1; url=View Car.php');
    }
}
?>