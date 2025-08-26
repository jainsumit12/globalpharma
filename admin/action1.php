<?php
include('config.php');
if(isset($_GET['status']))
{
echo  $status1=$_GET['status'];
echo $select="select * from product where id='$status1'";
$select1=mysqli_query($conn,$select);
while($row=mysqli_fetch_object($select1))
{
$status_var=$row->status;
if($status_var=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}
 echo $update=mysqli_query($conn,"update product set status='$status_state' where id='$status1' ");
if($update)
{
header("Location: inventory.php");
}
else
{
echo mysqli_error();
}
}
?>
<?php
}
?>