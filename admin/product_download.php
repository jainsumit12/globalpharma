<?php
include "config.php";
//include_once"../adminpanel/include/connect.php";
// Connection 

$date=date('d-m-y');
$filename = "product_record-$date.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = "SELECT product_name,sku,mrp,category FROM product ";
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
