<?php
if(isset($_POST['logout']))
{
    header("Location: Login.php");
}
if(isset($_POST['about']))
{
    header("Location: About.html");
}
?>