<?php
$Customer_Code=$_POST['Customer_Code'];
$Customer_Name=$_POST['Customer_Name'];
if (isset($_POST["action"])) {
    echo($Customer_Code);
}else{  
    echo ('No image selected');
}
if (isset($_POST["action1"])) {
    echo($Customer_Name);
}else{  
    echo ('No image selected');
}
?>