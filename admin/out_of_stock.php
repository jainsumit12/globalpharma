<?php
include "../include/config.php";
//include_once"../adminpanel/include/connect.php";
// Connection 
$date=date('d-m-y');

$filename = "out-of-stock-'$date'.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = "SELECT product_name,brand_name,sku,mrp,discount,quantity FROM product where quantity='0' ORDER BY id desc ";
$run = mysqli_query($conn,$user_query);
// Write data to file
$flag = false;
while ($row = mysqli_fetch_assoc($run)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}
?>
