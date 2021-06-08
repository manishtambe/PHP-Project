<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
    <link rel="stylesheet" href="Add Car.css">
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
</script> 
</head>
<body>
   <div class="head">
   <form action="addca.php" method="post">
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
        <img src="repair.png" alt="logo">
        <p>Add Car</p>
       </div>
       <hr class="seperator">
   </div>
   <div class="main">
        <form action="Addca.php" method="post" autocomplete="off">
            <div class="block1">
                <b><label for="car-code" class="lb1">Car Code</label></b>
                <b><label for="car-code" class="l11">Auto Generated</label></b>
            <div>
            <div class="block">
                <b><label class="lb1">Car Name</label><b>
                <input type="text" name="cname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Model</label><b>
                <input type="text" name="cmodel" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Ragistartion No</label><b>
                <input type="text" name="rno" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date of Entry</label><b>
                <b><label for="car-code" class="l11">Auto Generated</label></b>
            </div>
            <div class="block">
                <b><label class="lb1">Time of Entry</label><b>
                <b><label for="car-code" class="l11">Auto Generated</label></b>
            </div>
            <div class="block">
                <b><label class="lb1">Owner Name</label><b>
                <input type="text" name="owner_name" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Owner CNIC No</label><b>
                <input type="number" name="OwnerCNIC" step="1" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Colour</label><b>
                <input type="text" name="CarCo" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Extra Details</label><b>
                <input type="text" name="Extrad"/>
            </div>
            <div class="bt1">
                <input type="submit" name="submit" value="Submit" class="sub">
            </div>
        </form>
   </div><br>
</body>
</html>