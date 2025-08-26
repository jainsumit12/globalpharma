<?php
include('../include/config.php');
if(isset($_GET['status']))
{
  $status1=$_GET['status'];
 $select="select * from appointment where id='$status1'";
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
 echo $update=mysqli_query($conn,"update appointment set status='$status_state' where id='$status1' ");
if($update)
{
header("Location: registration.php");
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