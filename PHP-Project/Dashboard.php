<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Dashboard.css">
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
</head>
<body>
   <div class="head">
   <form method="post" action="handle.php">
        <div class="img">
        <button class="logbtn" name="about">
            <img src="user.png" alt="about">
            <p>About</p>
        </button>
        </div>
        <h1>MMT Garage Management System</h1>
        <div class="log">
            
                <button class="logbtn" name="logout">
                    <img src="logout.png" alt="Save icon"/>
                    Logout
                </button>
            </form>
        </div>
        <hr class="seperater">
   </div>
   <button class="Button-toggle" style="margin-left:220px;">
        <i class="fas fa-bars"style="font-size:20px;color:#00C8F4;"></i>
        </button>
        <aside class="sidebar">
            <div class="header">
                    <button class="close">
                        <i class="fa fa-close"style="font-size:35px;color:#00C8F4;"></i>
                    </button>
            </div>
            <div class="coders">
                <image src="logo2.png" alt="background"/>
            </div>
            <form action="Dash.php" method="post">
                <div class="imgb">
                    <button  class="imgbtn" name="customer" disabled>
                        <img src="customer.png" alt="Save icon"/>
                        Customer
                    </button>
                    <button  class="imgbtn1" name="viewcustomer">
                        <img src="search.png" alt="Save icon"/>
                        View Customer
                    </button>
                    <button  class="imgbtn1" name="addcustomer">
                        <img src="add.png" alt="Save icon"/>
                        Add Customer
                    </button>

                    <div class="imgb1" name="Stock">
                    <button  class="imgbtn" disabled>
                        <img src="wheelbarrow.png" alt="Save icon"/>
                        Stock
                    </button>
                    <button  class="imgbtn1" name="viewstock">
                        <img src="search.png" alt="Save icon"/>
                        View Stock
                    </button>
                    <button  class="imgbtn1" name="addstock">
                        <img src="add.png" alt="Save icon"/>
                        Add Stock
                    </button>

                    <div class="imgb1" name="employee">
                    <button  class="imgbtn" disabled>
                        <img src="employee.png" alt="Save icon"/>
                        Employees
                    </button>
                    <button  class="imgbtn1" name="viewemployee">
                        <img src="search.png" alt="Save icon"/>
                        View Employee
                    </button>
                    <button  class="imgbtn1" name="addemployee">
                        <img src="add.png" alt="Save icon"/>
                        Add Employee
                    </button>

                    <div class="imgb1">
                    <button  class="imgbtn" name="car" disabled>
                        <img src="service.png" alt="Save icon"/>
                        Car
                    </button>
                    <button  class="imgbtn2" name="viewcar">
                        <img src="search.png" alt="Save icon"/>
                        View Car 
                    </button>
                    <button  class="imgbtn2" name="carentrance">
                        <img src="car.png" alt="Save icon"/>
                        Car Entrance In Garage
                    </button>
                    <!--<button  class="imgbtn2" name="carexit">
                        <img src="car-repair.png" alt="Save icon"/>
                        Car Exiting From Garage
                    </button>-->
                </div>
            <form>
              <ul class="social-icons" style="margin-top:60px;">
                <li>
                  <a href="https://www.twitter.com">
                    <i class="fab fa-facebook" style="color:#00C8F4;"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.twitter.com">
                    <i class="fab fa-youtube" style="color:#00C8F4;"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.twitter.com">
                    <i class="fa fa-google" style="color:#00C8F4;"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.twitter.com">
                    <i class="fab fa-linkedin" style="color:#00C8F4;"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.twitter.com">
                    <i class="fa fa-git-square" style="color:#00C8F4;"></i>
                  </a>
                </li>
              </ul>
        </aside>
    </div>
    <div>
        <image src="wallpaper.jpg" alt="background" class="bgimg"/>
    <div>
    <script type="text/javascript" src="Dashboard.js"></script>
</body>
</html>