<?php
    $Cust_Code=$_POST["Cust_Code"];
    $ename=$_POST["ename"];
    $cnicn=$_POST["cnicn"];
    $designation=$_POST["designation"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $mno=$_POST["mno"];
    $eaddress=$_POST["eaddress"];
    $dofj=$_POST["dofj"];
    $add=$_POST["add"];
    $Extrad=$_POST["Extrad"];
    function deletedata($Cust_Code,$ename,$cnicn,$designation,$dob,$gender,$mno,$eaddress,$dofj,$add,$Extrad)
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
        $query="DELETE FROM employee WHERE Employee_Code='$Cust_Code' AND Employee_Name='$ename' AND CNIC_Number='$cnicn' AND Designation='$designation' AND Date_of_Birth='$dob' AND Gender='$gender' AND Phone_Number='$mno' AND Email_Address='$eaddress' AND Date_of_Joining='$dofj' AND Address='$add' AND Extra_Detail='$Extrad'";
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
            Record Deleted sucessful
            </div>
            </body>
            </html>';
            header('Refresh: 1; url=View Employee.php');
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
            header('Refresh: 1; url=View Employee.php');
        }
    }
    }
    function updatedata($Cust_Code,$ename,$cnicn,$designation,$dob,$gender,$mno,$eaddress,$dofj,$add,$Extrad)
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
        $query="UPDATE employee SET Employee_Name='$ename',CNIC_Number='$cnicn',Designation='$designation',Date_of_Birth='$dob',Gender='$gender',Phone_Number='$mno',Email_Address='$eaddress',Date_of_Joining='$dofj',Address='$add', Extra_Detail='$Extrad' WHERE Employee_Code=$Cust_Code";
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
            header('Refresh: 1; url=View Employee.php');
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
            header('Refresh: 1; url=View Employee.php');
        }
    }
    }
    if(isset($_POST["edit"]))
    {
        if(preg_match("/^([a-zA-Z' ]+)$/",$ename)==1)
        {
            if(preg_match("/^([a-zA-Z' ]+)$/",$designation)==1)
            {
                if($gender=="Male"||$gender=="male"||$gender=="Female"||$gender=="female")
                {
                    if(strlen($mno)==10)
                    {
                        if(preg_match("/^[\.a-zA-Z0-9,\- ]+$/",$add)==1)
                        {
                            updatedata($Cust_Code,$ename,$cnicn,$designation,$dob,$gender,$mno,$eaddress,$dofj,$add,$Extrad);
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
                            header('Refresh: 1; url=View Employee.php');
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
                            header('Refresh: 1; url=View Employee.php');
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
                            header('Refresh: 1; url=View Employee.php');
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
                            Please Enter Designation In Valid Format
                            </div>
                            </body>
                            </html>';
                            header('Refresh: 1; url=View Employee.php');
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
                            Please Insert Valid Employee Name
                            </div>
                            </body>
                            </html>';
                            header('Refresh: 1; url=View Employee.php');
        }
    }
    if(isset($_POST["bin"]))
    {
        if(preg_match("/^([a-zA-Z' ]+)$/",$ename)==1)
        {
            if(preg_match("/^([a-zA-Z' ]+)$/",$designation)==1)
            {
                if($gender=="Male"||$gender=="male"||$gender=="Female"||$gender=="female")
                {
                    if(strlen($mno)==10)
                    {
                        if(preg_match("/^[\.a-zA-Z0-9,\- ]+$/",$add)==1)
                        {
                            deletedata($Cust_Code,$ename,$cnicn,$designation,$dob,$gender,$mno,$eaddress,$dofj,$add,$Extrad);
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
                            header('Refresh: 1; url=View Employee.php');
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
                            header('Refresh: 1; url=View Employee.php');
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
                            header('Refresh: 1; url=View Employee.php');
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
                            Please Enter Designation In Valid Format
                            </div>
                            </body>
                            </html>';
                            header('Refresh: 1; url=View Employee.php');
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
                            Please Insert Valid Employee Name
                            </div>
                            </body>
                            </html>';
                            header('Refresh: 1; url=View Employee.php');
        }
    }
?>