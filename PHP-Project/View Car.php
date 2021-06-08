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
$sql = "SELECT * FROM detail ORDER BY Car_Code ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Car</title>
    <link rel="stylesheet" href="View Car.css">
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
        <img src="two-cars.png" alt="logo">
        <p>View Car</p>
       </div>
       <hr class="seperator">
   </div>
<div class="bootstrap" style="margin-left:10px;margin-top:10px;">
    <table class="table" style="border: 1px solid black;" id="table">
        <thead class="thead-dark" style="background-color: #212830;color:#00C8F4;">
            <tr>
                <th>Car Number</th>
                <th>Car Name</th>
                <th>Car Model</th>
                <th>Ragistration Number</th>
                <th>Date_of_Entry</th>
                <th>Time_of_Entry</th>
                <th style="display:none;">Owner Name</th>
                <th style="display:none;">Owner CNIC No</th>

                <th style="display:none;">Car Color</th>
                <th style="display:none;">Extra Details</th>
                <th style="display:none;">Exiting Time</th>
                <th style="display:none;">Exiting Date</th>
                <!--<th style="display:none;">Address</th>-->
            </tr>
        </thead>
        <tbody>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <?php   // LOOP TILL END OF DATA 
        while($rows=$result->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $rows['Car_Code'];?></td>
            <td><?php echo $rows['Car_Name'];?></td>
            <td><?php echo $rows['Car_Model'];?></td>
            <td><?php echo $rows['Registration_Number'];?></td>
            <td><?php echo $rows['Date_of_Entry'];?></td>
            <td><?php echo $rows['Time_of_Entry'];?></td>
            <td style="display:none;"><?php echo $rows['Owner_Name'];?></td>
            <td style="display:none;"><?php echo $rows['Owner_CNIC_Number'];?></td>
            <td style="display:none;"><?php echo $rows['Car_Color'];?></td>
            <td style="display:none;"><?php echo $rows['Extra_Details'];?></td>
            <td style="display:none;"><?php echo $rows['Exiting_Time'];?></td>
            <td style="display:none;"><?php echo $rows['Exiting_Date'];?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
   <div class="main" style="height:450px;">
        <form action="ViewCa.php" method="post" autocomplete="off">
            <div class="block1">
            <button name="bin" value="blue" class="bin"><img width="32" height="32" alt="submit" value="bin" src="trash-bin.png"/></button>
                <b><label class="lb2">Car Details</label></b>
            <button name="edit" value="blue" class="edit"><img width="32" height="32" alt="submit" value="edit" src="edit.png"/></button>
            </div>
            <div class="block">
                <b><label class="lb1">Car Code</label></b>
                <input type="number" step="number" name="Car_Code" id="Car_Code" required/>
            <div>
            <div class="block">
                <b><label class="lb1">Car Name</label><b>
                <input type="text" name="cname" id="cname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Model</label><b>
                <input type="text" name="cmodel" id="cmodel" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Ragistration No</label><b>
                <input type="text" name="rno" id="rno" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date of Entry</label><b>
                <input type="date" class="i4" name="cared" id="cared" style="width:170px;" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Time of Entry</label><b>
                <input type="time" class="i2"  step="any" name="caret" id="caret" style="width:170px;" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Owner Name</label><b>
                <input type="text" name="owner_name" id="owner_name" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Owner CNIC No</label><b>
                <input type="number" step="1" name="OwnerCNIC" id="OwnerCNIC" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Color</label><b>
                <input type="text" name="CarCo" id="CarCo" required />
            </div>
            <div class="block">
                <b><label class="lb1">Extra Details</label><b>
                <input type="text" id="Extrad" name="Extrad"/>
            </div>
            <!--<div class="block2">
                <b><label class="lb2">Car Entry</label><b>
                <b><label class="lb3">Car Exit</label><b>
            </div>
            <div class="block3">
                <b><label class="lb4">Time:</label><b>
                <input type="time" class="i2"  step="any" name="caret" id="caret"required/>
                <input type="time" class="i1" step="any" name="carexitt" id="carexitt"required/>
            </div>

            <div class="block4">
                <b><label class="lb5">Date:</label><b>
                <input type="date" class="i4" name="cared" id="cared"required/>
                <input type="date" class="i3" name="carexitd" id="carexitd"required/>
            </div>-->
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
                document.getElementById("Car_Code").value = this.cells[0].innerHTML;
                document.getElementById("cname").value = this.cells[1].innerHTML;
                document.getElementById("cmodel").value = this.cells[2].innerHTML;
                document.getElementById("rno").value = this.cells[3].innerHTML;
                document.getElementById("owner_name").value = this.cells[6].innerHTML;
                document.getElementById("OwnerCNIC").value = this.cells[7].innerHTML;
                document.getElementById("CarCo").value = this.cells[8].innerHTML;
                document.getElementById("Extrad").value = this.cells[9].innerHTML;
                document.getElementById("caret").value = this.cells[5].innerHTML;
                //document.getElementById("carexitt").value = this.cells[10].innerHTML;
                document.getElementById("cared").value = this.cells[4].innerHTML;
                //document.getElementById("carexitd").value = this.cells[11].innerHTML;
            };
        }
    </script>
</body>
</html>