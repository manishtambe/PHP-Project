<?php 
if (isset($_POST["viewcustomer"])){
    header("Location: View Customer.php");
}
else if(isset($_POST["addcustomer"]))
{
    header("Location: Add Customer.php");
}
else if(isset($_POST["viewstock"]))
{
    header("Location: View Stock.php");
}
else if(isset($_POST["addstock"])){
    header("Location: Add Item.php");
}
else if(isset($_POST["viewemployee"])){
    header("Location: View Employee.php");
}
else if(isset($_POST["addemployee"])){
    header("Location: Add Employee.php");
}
else if(isset($_POST["viewcar"]))
{
    header("Location: View Car.php");
}
else if(isset($_POST["carentrance"]))
{
    header("Location: Add Car.php");
}
else if(isset($_POST["carexit"]))
{
    header("Location: Car Exit.php");
}
?>