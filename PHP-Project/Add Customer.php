<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="Add Customer.css">
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
</head>
<body>
   <div class="head">
   <form action="addc.php" method="post">
   <div class="img">
        <button class="logbtn1" name="back" style="font-size:20px;border:none;background-color: #212830;color:#00C8F4;outline: none;">
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
        <img src="add-friend.png" alt="logo">
        <p>Add Customer</p>
       </div>
       <hr class="seperator">
   </div>
   <div class="main">
        <form action="Addc.php" method="post" autocomplete="off">
            <div class="block1">
                <b><label for="customer-code" class="lb1">Customer Code</label></b>
                <b><label for="customer-code" class="l11">Auto Generated</label></b>
            <div>
            <div class="block">
                <b><label class="lb1">Customer Name</label><b>
                <input type="text" name="cname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">CNIC Number</label><b>
                <input type="number" name="cnicnumber" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date of Birth</label><b>
                <input type="date" name="dob" style="width: 170px;" required />
            </div>
            <div class="block">
                <b><label class="lb1">Gender</label><b>
                <input type="text" name="gender" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Mobile No</label><b>
                <input type="number" name="mobileno" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Email Address</label><b>
                <input type="email" name="emailaddress" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Name</label><b>
                <input type="text" name="carname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Model</label><b>
                <input type="text" name="carmodel" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Registration No</label><b>
                <input type="text" name="carrno" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Address</label><b>
                <input type="text" name="address" required/>
            </div>
            <div class="bt1">
                <input type="submit" value="Submit" name="submit"class="sub">
            </div>
        </form>
   </div><br>
</body>
</html>