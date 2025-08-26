
<?php
include_once"dbMysql.php";

$con = new DB_con();
$table = "product";
$sku = $_GET['sku'];
$delete_product=$con->delete1($table,$sku);
if($delete_product)
{
?>
<script>
alert("Product Successfully Deleted");
window.location ='inventory.php'
</script>
<?php
}
?>