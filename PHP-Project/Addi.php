<?php
    $iname=$_POST["iname"];
    $Category=$_POST["Category"];
    $quantity=$_POST["quantity"];
    $bprice=$_POST["bprice"];
    $sprice=$_POST["sprice"];
    $cname=$_POST["cname"];
    $warranty=$_POST["warranty"];
    function savedata($iname,$Category,$quantity,$bprice,$sprice,$cname,$warranty)
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
            $time=date("h:i:s");
            $date=date("Y-m-d");
            $query="INSERT INTO stock(Item_Name,Category,Quantity,Buying_Price,Selling_Price,Car_Name,Time_Of_Entry,Date_Of_Entry,Warranty) VALUES('$iname','$Category','$quantity','$bprice','$sprice','$cname','$time','$date','$warranty')";
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
    if(isset($_POST["submit"]))
    {
        if(preg_match("/^([a-zA-Z' ]+)$/",$iname)==1)
        {
            if(preg_match("/^([a-zA-Z' ]+)$/",$cname)==1)
            {
                savedata($iname,$Category,$quantity,$bprice,$sprice,$cname,$warranty);
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
                header('Refresh: 1; url=Add Item.php');
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
            header('Refresh: 1; url=Add Item.php');
        }
    }
    /*else
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
        Error While Inserting An Data!
        </div>
        </body>
        </html>';
        header('Refresh: 1; url=Add Item.php');
    }*/
    if(isset($_POST["back"]))
    {
        header("Location: Dashboard.php");
    }
?>