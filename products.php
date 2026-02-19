<?php
include("admin_only.php");
include("config/db.php");
$result = $conn->query("SELECT * FROM products");
?>
