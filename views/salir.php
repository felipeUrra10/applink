<?php 
session_start();
if(isset($_SESSION['usuario'])){
    unset($_SESSION['usuario']);
    session_destroy();
    header("Location:../index.php");
}
header("Location:../index.php");