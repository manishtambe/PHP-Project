<?php
$Item_Num=$_POST["Item_Num"];
$iname=$_POST["iname"];
$Category=$_POST["Category"];
$quantity=$_POST["quantity"];
$bprice=$_POST["bprice"];
$sprice=$_POST["sprice"];
$cname=$_POST["cname"];
$tofe=$_POST["tofe"];
$dofe=$_POST["dofe"];
$warranty=$_POST["warranty"];
function deletedata($Item_Num,$iname,$Category,$quantity,$bprice,$sprice,$cname,$tofe,$dofe,$warranty)
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
        $query="DELETE FROM stock WHERE Item_Code='$Item_Num' AND Item_Name='$iname' AND Category='$Category' AND Quantity='$quantity' AND Buying_Price='$bprice' AND Selling_Price='$sprice' AND Car_Name='$cname' AND Time_Of_Entry='$tofe' AND Date_Of_Entry='$dofe' AND Warranty='$warranty'";
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
            header('Refresh: 1; url=View Stock.php');
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
            header('Refresh: 1; url=View Stock.php');
        }
    }
}
function updatedata($Item_Num,$iname,$Category,$quantity,$bprice,$sprice,$cname,$tofe,$dofe,$warranty)
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
        $query="UPDATE stock SET Item_Name='$iname',Category='$Category',Quantity='$quantity',Buying_Price='$bprice',Selling_Price='$sprice',Car_Name='$cname',Time_Of_Entry='$tofe',Date_Of_Entry='$dofe',Warranty='$warranty' WHERE Item_Code=$Item_Num";
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
            header('Refresh: 1; url=View Stock.php');
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
            header('Refresh: 1; url=View Stock.php');
        }
    }
}
if(isset($_POST["edit"]))
{
    if(preg_match("/^([a-zA-Z' ]+)$/",$iname)==1)
        {
            if(preg_match("/^([a-zA-Z' ]+)$/",$cname)==1)
            {
                updatedata($Item_Num,$iname,$Category,$quantity,$bprice,$sprice,$cname,$tofe,$dofe,$warranty);
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
                Please Enter Valid Car Name
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=View Stock.php');
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
            Please Enter Valid Item Name
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=View Stock.php');
        }
}
if(isset($_POST["bin"]))
{
    if(preg_match("/^([a-zA-Z' ]+)$/",$iname)==1)
    {
        if(preg_match("/^([a-zA-Z' ]+)$/",$cname)==1)
        {
            deletedata($Item_Num,$iname,$Category,$quantity,$bprice,$sprice,$cname,$tofe,$dofe,$warranty);
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
            Please Enter Valid Car Name
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=View Stock.php');
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
        Please Enter Valid Item Name
        </div>
        </body>
        </html>';
        header('Refresh: 1; url=View Stock.php');
    }
}
?>