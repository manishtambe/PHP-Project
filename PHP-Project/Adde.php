<?php
    $ename=$_POST["ename"];//
    $cnicn=$_POST["cnicn"];
    $designation=$_POST["designation"];//
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];//
    $mno=$_POST["mno"];//
    $eaddress=$_POST["eaddress"];
    $dofj=$_POST["dofj"];
    $add=$_POST["add"];//
    $Extrad=$_POST["Extrad"];
    function savedata($ename,$cnicn,$designation,$dob,$gender,$mno,$eaddress,$dofj,$add,$Extrad)
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
            $query="INSERT INTO employee(Employee_Name,CNIC_Number,Designation,Date_of_Birth,Gender,Phone_Number,Email_Address,Date_of_Joining,Address,Extra_Detail) VALUES('$ename','$cnicn','$designation','$dob','$gender','$mno','$eaddress','$dofj','$add','$Extrad')";
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
                header('Refresh: 1; url=Add Employee.php');
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
                header('Refresh: 1; url=Add Employee.php');
            }
        }
    }
    if(isset($_POST["submit"]))
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
                            savedata($ename,$cnicn,$designation,$dob,$gender,$mno,$eaddress,$dofj,$add,$Extrad);
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
                            header('Refresh: 1; url=Add Employee.php');
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
                            header('Refresh: 1; url=Add Employee.php');
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
                            header('Refresh: 1; url=Add Employee.php');
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
                            header('Refresh: 1; url=Add Employee.php');
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
                            header('Refresh: 1; url=Add Employee.php');
        } 
    }
    if(isset($_POST["back"]))
    {
        header("Location: Dashboard.php");
    }
?>