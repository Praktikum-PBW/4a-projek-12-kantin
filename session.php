<?php 
require "config.php";
session_start();
$username = $_SESSION['user'];
$querySession = mysqli_query($login, "SELECT * FROM login where user='$username'");
$rowSession = mysqli_fetch_array($querySession);
$_SESSION['user'] = $rowSession['user'];
if (!isset($_SESSION[null]) && !isset($_SESSION["login"])){
    echo"<script>alert('Silahkan Login Terlebih Dahulu')
                    window.location.replace('index.php')</script>";
    exit;
}

?>