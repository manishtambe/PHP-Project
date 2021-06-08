<?php
  
// Username is root
$user = 'root';
$password = ''; 
  
// Database name is gfg
$database = 'mmt_garages'; 
  
// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM customer ORDER BY Customer_Code ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer</title>
    <link rel="stylesheet" href="View Customer.css">
    <link rel="stylesheet" href="https://toert.github.io/Isolated-Bootstrap/versions/3.3.7/iso_bootstrap3.3.7min.css">
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
</head>
<body>
   <div class="head">
   <form action="Dashboard.php" method="post">
   <div class="img">
        <button class="logbtn" name="back" style="font-size:20px;border:none;background-color: #212830;color:#00C8F4;outline: none;">
            <img src="home.png" alt="about">
            <p>Home</p>
        </button>
        </div>
        <h1>MMT Garage Management System</h1>
   </form>
        <hr class="seperater">
   </div>
   <div class="head1">
       <div class="img2">
        <img src="customer_logo.png" alt="logo">
        <p>View Customer</p>
       </div>
       <hr class="seperator">
   </div>
<div class="bootstrap" style="margin-left:10px;margin-top:10px;">
    <table class="table" style="border: 1px solid black;" id="table">
        <thead class="thead-dark" style="background-color: #212830;color:#00C8F4;">
            <tr>
                <th>Customer Code</th>
                <th>Customer Name</th>
                <th>CNIC Number</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Phone No</th>

                <th style="display:none;">Email Address</th>
                <th style="display:none;">Car Name</th>
                <th style="display:none;">Car Model</th>
                <th style="display:none;">Car Ragistration Number</th>
                <th style="display:none;">Address</th>
            </tr>
        </thead>
        <tbody>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <?php   // LOOP TILL END OF DATA 
        while($rows=$result->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $rows['Customer_Code'];?></td>
            <td><?php echo $rows['Customer_Name'];?></td>
            <td><?php echo $rows['CNIC_Number'];?></td>
            <td><?php echo $rows['Date_of_Birth'];?></td>
            <td><?php echo $rows['Gender'];?></td>
            <td><?php echo $rows['Phone_Number'];?></td>
            <td style="display:none;"><?php echo $rows['Email_Address'];?></td>
            <td style="display:none;"><?php echo $rows['Car_Name'];?></td>
            <td style="display:none;"><?php echo $rows['Car_Model'];?></td>
            <td style="display:none;"><?php echo $rows['Car_Registration_Number'];?></td>
            <td style="display:none;"><?php echo $rows['Address'];?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
   <div class="main">
        <form action="ViewC.php" method="post" autocomplete="off">
            <div class="block1">
            <button value="blue" class="bin" name="bin"><img width="32" height="32" alt="submit" value="bin" src="trash-bin.png"/></button>
                <b><label class="lb2">Customer Details</label></b>
            <button value="blue" class="edit" name="edit"><img width="32" height="32" alt="submit" value="edit" src="edit.png"/></button>
            </div>
            <div class="block">
                <b><label class="lb1">Customer Code</label></b>
                <input type="number" name="Customer_Code" id="Customer_Code" required/>
            <div>
            <div class="block">
                <b><label class="lb1">Customer Name</label><b>
                <input type="text" name="cname" id="cname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">CNIC Number</label><b>
                <input type="number" name="cnicnumber" id="cnicnumber" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date of Birth</label><b>
                <input type="date" name="dob" id="dob" style="width: 170px;" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Gender</label><b>
                <input type="text" name="gender" id="gender" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Mobile No</label><b>
                <input type="number" name="mobileno" id="mobileno" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Email Address</label><b>
                <input type="email" name="emailaddress" id="emailaddress" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Name</label><b>
                <input type="text" name="carname" id="carname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Model</label><b>
                <input type="text" name="carmodel" id="carmodel" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Registration No</label><b>
                <input type="text" name="carrno" id="carrno" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Address</label><b>
                <input type="text" name="address" id="address" required/>
            </div>
            <!---<div class="bt1">
                <input type="submit" value="Submit" class="sub">
            </div>--->
        </form>
   </div><br>
   <script>
        var table = document.getElementById('table');   
        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick = function()
            {
                //rIndex = this.rowIndex;
                document.getElementById("Customer_Code").value = this.cells[0].innerHTML;
                document.getElementById("cname").value = this.cells[1].innerHTML;
                document.getElementById("cnicnumber").value = this.cells[2].innerHTML;
                document.getElementById("dob").value = this.cells[3].innerHTML;
                document.getElementById("gender").value = this.cells[4].innerHTML;
                document.getElementById("mobileno").value = this.cells[5].innerHTML;
                document.getElementById("emailaddress").value = this.cells[6].innerHTML;
                document.getElementById("carname").value = this.cells[7].innerHTML;
                document.getElementById("carmodel").value = this.cells[8].innerHTML;
                document.getElementById("carrno").value = this.cells[9].innerHTML;
                document.getElementById("address").value = this.cells[10].innerHTML;
            };
        }
    </script>
</body>
</html>