<?php
include("admin_only.php");
include("config/db.php");

$total_products = $conn->query("SELECT COUNT(*) as total FROM products")->fetch_assoc()['total'];
$total_sales = $conn->query("SELECT SUM(total) as total FROM sales")->fetch_assoc()['total'];
?>
