<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="Add Item.css">
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
        <img src="Shopping-Cart.png" alt="logo">
        <p>Add Item</p>
       </div>
       <hr class="seperator">
   </div>
   <div class="main">
        <form action="Addi.php" method="post" autocomplete="off">
            <div class="block1">
                <b><label for="Item-code" class="lb1">Item Code</label></b>
                <b><label for="Item-code" class="l11">Auto Generated</label></b>
            <div>
            <div class="block">
                <b><label class="lb1">Item Name</label><b>
                <input type="text" name="iname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Category</label><b>
                <select class="Category" name="Category">
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
                <input type="number" step="number" name="quantity" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Buying Price (INR)</label><b>
                <input type="number" step="number" name="bprice" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Selling Price (INR)</label><b>
                <input type="number" step="number" name="sprice" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Car Name</label><b>
                <input type="text" name="cname" required/>
            </div>
            <div class="block">
                <b><label class="lb1">Time Of Entry</label><b>
                <b><label for="Item-code" class="l11">Auto Generated</label></b>
            </div>
            <div class="block">
                <b><label class="lb1">Date Of Entry</label><b>
                <b><label for="Item-code" class="l11">Auto Generated</label></b>
            </div>
            <div class="block">
                <b><label class="lb1">Warranty</label><b>
                <input type="text" name="warranty"/>
            </div>
            <div class="bt1">
                <input type="submit" value="Submit" name="submit" class="sub">
            </div>
        </form>
   </div><br>
</body>
</html>
<!--- "Door and Windows", "Air Conditioning System", "Modification Parts", "Body Parts", "Audio Video Devices", "Electronics", "Denting Painting", "Engine Parts"--->