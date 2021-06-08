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
$sql = "SELECT * FROM stock ORDER BY Item_Code ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Stock</title>
    <link rel="stylesheet" href="View Stock.css">
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
        <img src="Shopping-Cart.png" alt="logo">
        <p>View Stock</p>
       </div>
       <hr class="seperator">
   </div>
<div class="bootstrap" style="margin-left:10px;margin-top:10px;">
    <table class="table" style="border: 1px solid black;" id="table">
        <thead class="thead-dark" style="background-color: #212830;color:#00C8F4;">
            <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
                <th style="display:none;">Car Name</th>
                <th style="display:none;">Time of Entry</th>
                <th style="display:none;">Date of Entry</th>
                <th style="display:none;">Warranty</th>
                <!---<th style="display:none;">Car Ragistration Number</th>
                <th style="display:none;">Address</th>--->
            </tr>
        </thead>
        <tbody>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <?php   // LOOP TILL END OF DATA 
        while($rows=$result->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $rows['Item_Code'];?></td>
            <td><?php echo $rows['Item_Name'];?></td>
            <td><?php echo $rows['Category'];?></td>
            <td><?php echo $rows['Quantity'];?></td>
            <td><?php echo $rows['Buying_Price'];?></td>
            <td><?php echo $rows['Selling_Price'];?></td>
            <td style="display:none;"><?php echo $rows['Car_Name'];?></td>
            <td style="display:none;"><?php echo $rows['Time_Of_Entry'];?></td>
            <td style="display:none;"><?php echo $rows['Date_Of_Entry'];?></td>
            <td style="display:none;"><?php echo $rows['Warranty'];?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
   <div class="main">
        <form action="Viewi.php" method="post" autocomplete="off">
            <div class="block1">
            <button name="bin" value="blue" class="bin"><img width="32" height="32" alt="submit" value="bin" src="trash-bin.png"/></button>
                <b><label class="lb2">Stock Details</label></b>
            <button name="edit" value="blue" class="edit"><img width="32" height="32" alt="submit" value="edit" src="edit.png"/></button>
            </div>
            <div class="block">
                <b><label class="lb1">Item Number</label></b>
                <input type="number" step="number" name="Item_Num" id="Item_Num" required/>
            <div>
            <div class="block">
                <b><label class="lb1">Item Name</label><b>
                <input type="text" name="iname" id="iname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Category</label><b>
                <select class="Category" name="Category" id="Category">
                    <option value="Door and Windows">Door and Windows</option>
                    <option value="Air Conditioning System">Air Conditioning System</option>
                    <option value="Modification Parts">Modification Parts</option>
                    <option value="Audio Video Devices">Audio Video Devices</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Denting Painting">Denting Painting</option>
                    <option value="Engine Parts">Engine Parts</option>
                    <option value="Body Parts">Body Parts</option>
                </select>
            </div>
            <div class="block">
                <b><label class="lb1">Quantity</label><b>
                <input type="number" step="number" name="quantity" id="quantity" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Buying Price</label><b>
                <input type="number" step="number" name="bprice" id="bprice" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Selling Price</label><b>
                <input type="number" step="number" name="sprice" id="sprice" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Item belongs to Car</label><b>
                <input type="text" name="cname" id="cname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Time of Entry</label><b>
                <input type="time" name="tofe" id="tofe" step="any" style="width: 170px;" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date of Entry</label><b>
                <input type="date" name="dofe" id="dofe" style="width: 170px;" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Warranty</label><b>
                <input type="text" name="warranty" id="warranty"/>
            </div>
            <!---<div class="block">
                <b><label class="lb1">Address</label><b>
                <input type="text" />
            </div>
            <div class="bt1">
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
                document.getElementById("Item_Num").value = this.cells[0].innerHTML;
                document.getElementById("iname").value = this.cells[1].innerHTML;
                document.getElementById("Category").value = this.cells[2].innerHTML;
                document.getElementById("quantity").value = this.cells[3].innerHTML;
                document.getElementById("bprice").value = this.cells[4].innerHTML;
                document.getElementById("sprice").value = this.cells[5].innerHTML;
                document.getElementById("cname").value = this.cells[6].innerHTML;
                document.getElementById("tofe").value = this.cells[7].innerHTML;
                document.getElementById("dofe").value = this.cells[8].innerHTML;
                document.getElementById("warranty").value = this.cells[9].innerHTML;
            };
        }
    </script>
</body>
</html>