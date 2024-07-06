<?php
session_start();

if(isset($_SESSION["adminlogindatabase"]))
{
    unset($_SESSION["adminlogindatabase"]);
    header("location:login.php");
}
else
{
    header("location:index.php");
}
?>