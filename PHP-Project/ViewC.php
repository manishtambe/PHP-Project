<?php
$ccode =$_POST["Customer_Code"];
$cname=$_POST["cname"];
$cnicnumber=$_POST["cnicnumber"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$mobileno=$_POST["mobileno"];
$emailaddress=$_POST["emailaddress"];
$carname=$_POST["carname"];
$carmodel=$_POST["carmodel"];
$carrno=$_POST["carrno"];
$address=$_POST["address"];
function deletedata($ccode,$cname,$cnicnumber,$dob,$gender,$mobileno,$emailaddress,$carname,$carmodel,$carrno,$address)
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
        $query="DELETE FROM customer WHERE Customer_Code='$ccode' AND Customer_Name='$cname' AND CNIC_Number='$cnicnumber' AND Date_of_Birth='$dob' AND Gender='$gender' AND Phone_Number='$mobileno' AND Email_Address='$emailaddress' AND Car_Name='$carname' AND Car_Model='$carmodel' AND Car_Registration_Number='$carrno' AND Address='$address'";
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
            header('Refresh: 1; url=View Customer.php');
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
            header('Refresh: 1; url=View Customer.php');
        }
    }
}
function updatedata($ccode,$cname,$cnicnumber,$dob,$gender,$mobileno,$emailaddress,$carname,$carmodel,$carrno,$address)
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
        $query="UPDATE customer SET Customer_Name='$cname',CNIC_Number='$cnicnumber',Date_of_Birth='$dob',Gender='$gender',Phone_Number='$mobileno',Email_Address='$emailaddress',Car_Name='$carname',Car_Model='$carmodel',Car_Registration_Number='$carrno',Address='$address' WHERE Customer_Code=$ccode";
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
            header('Refresh: 1; url=View Customer.php');
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
            header('Refresh: 1; url=View Customer.php');
        }
    }
}
if(isset($_POST["edit"]))
{
    if(preg_match("/^([a-zA-Z' ]+)$/",$cname)==1)
       {
            if($gender=="Male"||$gender=="male"||$gender=="Female"||$gender=="female")
            {
                if(strlen($mobileno)==10)
                {
                    if(preg_match("/^([a-zA-Z' ]+)$/",$carname)==1)
                    {
                        if(preg_match("/^([A-Za-z0-9]+)$/",$carmodel)==1)
                        {
                            if(preg_match("/^([A-Za-z0-9]+)$/",$carrno)==1)
                            {
                                if(preg_match("/^[\.a-zA-Z0-9,\- ]+$/",$address)==1)
                                {
                                    updatedata($ccode,$cname,$cnicnumber,$dob,$gender,$mobileno,$emailaddress,$carname,$carmodel,$carrno,$address);
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
                                    Please Enter Address In Valid Format
                                    </div>
                                    </body>
                                    </html>';
                                    header('Refresh: 1; url=View Customer.php');
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
                                    header('Refresh: 1; url=View Customer.php');
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
                                    header('Refresh: 1; url=View Customer.php');
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
                                    header('Refresh: 1; url=View Customer.php');
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
                                    Please Enter 10 Digit Mobile No
                                    </div>
                                    </body>
                                    </html>';
                                    header('Refresh: 1; url=View Customer.php');
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
                Please Enter Gender In Valid Format
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=View Customer.php');
            }
       }
       else{
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
        Please Insert Valid Name
        </div>
        </body>
        </html>';
        header('Refresh: 1; url=View Customer.php');
       }
}
if(isset($_POST["bin"]))
{
    if(preg_match("/^([a-zA-Z' ]+)$/",$cname)==1)
       {
            if($gender=="Male"||$gender=="male"||$gender=="Female"||$gender=="female")
            {
                if(strlen($mobileno)==10)
                {
                    if(preg_match("/^([a-zA-Z' ]+)$/",$carname)==1)
                    {
                        if(preg_match("/^([A-Za-z0-9]+)$/",$carmodel)==1)
                        {
                            if(preg_match("/^([A-Za-z0-9]+)$/",$carrno)==1)
                            {
                                if(preg_match("/^[\.a-zA-Z0-9,\- ]+$/",$address)==1)
                                {
                                    deletedata($ccode,$cname,$cnicnumber,$dob,$gender,$mobileno,$emailaddress,$carname,$carmodel,$carrno,$address);
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
                                    Please Enter Address In Valid Format
                                    </div>
                                    </body>
                                    </html>';
                                    header('Refresh: 1; url=View Customer.php');
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
                                    header('Refresh: 1; url=View Customer.php');
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
                                    header('Refresh: 1; url=View Customer.php');
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
                                    header('Refresh: 1; url=View Customer.php');
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
                                    Please Enter 10 Digit Mobile No
                                    </div>
                                    </body>
                                    </html>';
                                    header('Refresh: 1; url=View Customer.php');
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
                Please Enter Gender In Valid Format
                </div>
                </body>
                </html>';
                header('Refresh: 1; url=View Customer.php');
            }
       }
       else{
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
        Please Insert Valid Name
        </div>
        </body>
        </html>';
        header('Refresh: 1; url=View Customer.php');
       }
}
?>