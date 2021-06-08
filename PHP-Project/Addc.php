<?php
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
    function savedata($cname,$cnicnumber,$dob,$gender,$mobileno,$emailaddress,$carname,$carmodel,$carrno,$address)
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
            $query="insert into customer(Customer_Name,CNIC_Number,Date_of_Birth,Gender,Phone_Number,Email_Address,Car_Name,Car_Model,Car_Registration_Number,Address)VALUES('$cname','$cnicnumber','$dob','$gender','$mobileno','$emailaddress','$carname','$carmodel','$carrno','$address')";
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
                header('Refresh: 1; url=Add Customer.php');
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
                header('Refresh: 1; url=Add Customer.php');
            }
        }
    }
    if(isset($_POST["submit"]))
    {
       if(preg_match("/^([a-zA-Z' ]+)$/",$cname)==1)
       {
            if($gender=="Male"||$gender=="male"||$gender=="Female"||$gender=="female")
            {
                if(strlen($mobileno)==10)
                {
                    if(preg_match("/^([A-Za-z]+)$/",$carname)==1)
                    {
                        if(preg_match("/^([A-Za-z0-9]+)$/",$carmodel)==1)
                        {
                            if(preg_match("/^([A-Za-z0-9]+)$/",$carrno)==1)
                            {
                                if(preg_match("/^[\.a-zA-Z0-9,\- ]+$/",$address)==1)
                                {
                                    savedata($cname,$cnicnumber,$dob,$gender,$mobileno,$emailaddress,$carname,$carmodel,$carrno,$address);
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
                                    header('Refresh: 1; url=Add Customer.php');
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
                                    header('Refresh: 1; url=Add Customer.php');
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
                                    header('Refresh: 1; url=Add Customer.php');
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
                                    header('Refresh: 1; url=Add Customer.php');
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
                                    header('Refresh: 1; url=Add Customer.php');
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
                header('Refresh: 1; url=Add Customer.php');
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
        header('Refresh: 1; url=Add Customer.php');
       }

    }
    if(isset($_POST["back"]))
    {
        header("Location: Dashboard.php");
    }
?>