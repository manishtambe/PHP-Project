<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="Add Employee.css">
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
</head>
<body>
   <div class="head">
   <form action="addi.php" method="post">
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
        <img src="add-friend (1).png" alt="logo">
        <p>Add Employee</p>
       </div>
       <hr class="seperator">
   </div>
   <div class="main">
        <form action="Adde.php" method="post" autocomplete="off">
            <div class="block1">
                <b><label for="employee-code" class="lb1">Employee Code</label></b>
                <b><label for="employee-code" class="l11">Auto Generated</label></b>
            <div>
            <div class="block">
                <b><label class="lb1">Employee Name</label><b>
                <input type="text" name="ename" required/>
            </div>
            <div class="block">
                <b><label class="lb1">CNIC Number</label><b>
                <input type="number" step="number" name="cnicn" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Designation</label><b>
                <input type="text" name="designation" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date Of Birth</label><b>
                <input type="date" name="dob" style="width: 170px;" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Gender</label><b>
                <input type="text" name="gender" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Mobile No</label><b>
                <input type="number" name="mno" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Email Address</label><b>
                <input type="email" name="eaddress" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Date of Joining</label><b>
                <input type="date" name="dofj" style="width: 170px;" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Address</label><b>
                <input type="text" name="add" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Extra Details (Optional)</label><b>
                <textarea rows="2" cols="22" name="Extrad"></textarea>
            </div>
            <div class="bt1">
                <input type="submit" name="submit" value="Submit" class="sub">
            </div>
        </form>
   </div><br>
</body>
</html>