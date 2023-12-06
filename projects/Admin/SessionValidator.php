<?php
session_start();
if($_SESSION['lgid']==""){
    header('location:../Guest/Login.php');
}
?>