<?php
include("auth.php");

if($_SESSION['role'] != 'admin'){
    echo "<script>alert('Access Denied!'); window.location='pos.php';</script>";
    exit();
}
?>
