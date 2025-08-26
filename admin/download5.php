<?php
include "../include/config.php";
//include_once"../adminpanel/include/connect.php";

// Connection 
$date=$_GET['date'];
$date1=$_GET['date1'];

$filename = "search_recordbydate.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = "SELECT order_id,total_amount,order_date,email_id,mobile_no,payment_type FROM order_summary where order_date >='$date' AND order_date <= '$date1' ORDER by id DESC ";
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
