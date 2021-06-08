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
$sql = "SELECT * FROM employee ORDER BY Employee_Code ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
    <link rel="stylesheet" href="View Employee.css">
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
        <img src="team.png" alt="logo">
        <p>View Employee</p>
       </div>
       <hr class="seperator">
   </div>
<div class="bootstrap" style="margin-left:10px;margin-top:10px;">
    <table class="table" style="border: 1px solid black;" id="table">
        <thead class="thead-dark" style="background-color: #212830;color:#00C8F4;">
            <tr>
                <th>Employee Code</th>
                <th>Employee Name</th>
                <th>CNIC Number</th>
                <th>Designation</th>
                <th>Date of Birth</th>
                <th>Gender</th>

                <th style="display:none;">Phone Number</th>
                <th style="display:none;">Email Address</th>
                <th style="display:none;">Date of Joining</th>
                <th style="display:none;">Address</th>
                <th style="display:none;">Extra Details</th>
            </tr>
        </thead>
        <tbody>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <?php   // LOOP TILL END OF DATA 
        while($rows=$result->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $rows['Employee_Code'];?></td>
            <td><?php echo $rows['Employee_Name'];?></td>
            <td><?php echo $rows['CNIC_Number'];?></td>
            <td><?php echo $rows['Designation'];?></td>
            <td><?php echo $rows['Date_of_Birth'];?></td>
            <td><?php echo $rows['Gender'];?></td>
            <td style="display:none;"><?php echo $rows['Phone_Number'];?></td>
            <td style="display:none;"><?php echo $rows['Email_Address'];?></td>
            <td style="display:none;"><?php echo $rows['Date_of_Joining'];?></td>
            <td style="display:none;"><?php echo $rows['Address'];?></td>
            <td style="display:none;"><?php echo $rows['Extra_Detail'];?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
   <div class="main">
        <form action="Viewe.php" method="post" autocomplete="off">
            <div class="block1">
            <button name="bin" value="blue" class="bin"><img width="32" height="32" alt="submit" value="bin" src="trash-bin.png"/></button>
                <b><label class="lb2">Employee Details</label></b>
            <button name="edit" value="blue" class="edit"><img width="32" height="32" alt="submit" value="edit" src="edit.png"/></button>
            </div>
            <div class="block">
                <b><label class="lb1">Employee Code</label></b>
                <input type="number" step="number" id="Cust_Code" name="Cust_Code" required/>
            <div>
            <div class="block">
                <b><label class="lb1">Employee Name</label><b>
                <input type="text" name="ename" id="ename" required/>
            </div>
            <div class="block">
                <b><label class="lb1">CNIC Number</label><b>
                <input type="number" step="number" name="cnicn" id="cnicn" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Designation</label><b>
                <input type="text" name="designation" id="designation" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date of Birth</label><b>
                <input type="date" name="dob" id="dob" style="width: 170px;" required />
            </div>
            <div class="block">
                <b><label class="lb1">Gender</label><b>
                <input type="text" name="gender" id="gender" required />
            </div>
            <div class="block">
                <b><label class="lb1">Phone Number</label><b>
                <input type="number" name="mno" id="mno" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Email Address</label><b>
                <input type="email" name="eaddress" id="eaddress" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date of Joining</label><b>
                <input type="date" name="dofj" id="dofj" style="width: 170px;" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Address</label><b>
                <input type="text" name="add" id="add" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Extra Details</label><b>
                <input type="text" name="Extrad" id="Extrad"/>
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
                document.getElementById("Cust_Code").value = this.cells[0].innerHTML;
                document.getElementById("ename").value = this.cells[1].innerHTML;
                document.getElementById("cnicn").value = this.cells[2].innerHTML;
                document.getElementById("designation").value = this.cells[3].innerHTML;
                document.getElementById("dob").value = this.cells[4].innerHTML;
                document.getElementById("gender").value = this.cells[5].innerHTML;
                document.getElementById("mno").value = this.cells[6].innerHTML;
                document.getElementById("eaddress").value = this.cells[7].innerHTML;
                document.getElementById("dofj").value = this.cells[8].innerHTML;
                document.getElementById("add").value = this.cells[9].innerHTML;
                document.getElementById("Extrad").value = this.cells[10].innerHTML;
            };
        }
    </script>
</body>
</html>