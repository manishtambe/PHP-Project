<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Exit</title>
    <link rel="stylesheet" href="Car Exit.css">
    <link rel="stylesheet" href="https://toert.github.io/Isolated-Bootstrap/versions/3.3.7/iso_bootstrap3.3.7min.css">
</head>
<body>
   <div class="head">
        <h1>MMT Garage Management System</h1>
        <div class="img">
            <img src="user.png" alt="about">
            <p>About</p>
        </div>
        <div class="img1">
            <img src="logout.png" alt="logout">
            <p>Logout</p>
        </div>
        <hr class="seperater">
   </div>
   <div class="head1">
        <div class="img2">
            <div class="img2">
            <img src="Shopping-Cart.png" alt="logo">
                <p>View Stock</p>
            <img src="order.png" alt="logo" class="img3">
                <p>Add To Cart</p>
            </div>
            <hr class="seperator">
        </div>
   </div>
<div class="bootstrap" style="float:left;height:480px;margin-left:10px;margin-top:10px;border:1px solid black;">
    <table  class="table" style=" table-layout: fixed;width: 340px;height: 40px;">
        <thead class="thead-dark" style="background-color: #212830;color:#00C8F4;">
            <tr>
                <th>Stock</th>
                <th>Quantity</th>
                <th>Buying Price</th>
            </tr>
        </thead>
        <tbody>
            <!---<tr>
                <td>6 mirror pack</td>
                <td>Doe</td>
                <td>john@example.comddddddddddd</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>--->
        </tbody>
    </table>
</div>
<div class="bootstrap" style="float:left;height:480px;margin-left:10px;margin-top:10px;border:1px solid black;">
    <table  class="table" style=" table-layout: fixed;width: 580px;height: 40px;">
        <thead class="thead-dark" style="background-color: #212830;color:#00C8F4;">
            <tr>
                <th>Car Code</th>
                <th>Sr_No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Labor Charges</th>
            </tr>
        </thead>
        <tbody>
            <!---<tr>
                <td>6 mirror pack</td>
                <td>Doe</td>
                <td>john@example.comddddddddddd</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>--->
        </tbody>
    </table>
</div>

<div class="main">
    <form action="" method="post" autocomplete="">
        <div class="block1">
                    <b><label class="lb2">Car Exit Details</label></b>
        </div>
        <div class="block">
                <b><label for="car-code" class="l1">Exiting Time</label></b>
                <label for="car-code" class="l2">Auto Entered</label><br><br>
                <b><label for="car-code" class="l1">Exiting Date</label></b>
                <label for="car-code" class="l2">Auto Entered</label>
        <div>
        <div class="block2">
                <b><label for="car-code" class="lb1">Car Code</label></b>
                <input type="text"/>
        <div>
        <div class="block3">
                    <b><label class="lb3">Parts Changed</label></b>
        </div>
        <div class="block4">
                <b><label for="car-code" class="lb3">Name</label></b>
                <input type="text"/><br>
                <b><label for="car-code" class="lb3">Price</label></b>
                <input type="text"/>
        <div>
        <div class="bt1">
            <input type="submit" value="Save" class="sub">
        </div>
        <div class="block5">
                <b><label for="car-code" class="lb4">Labour Charges</label></b>
                <input type="text"/><br>
        </div>
        <div class="bt1">
            <input type="submit" value="Save" class="sub">
        </div>
        <div class="bt2">
            <input type="submit" value="Save Receipt" class="sub">
            <input type="submit" value="CLEAR" class="sub">
        </div>
    </form>
</div>
</body>
</html>