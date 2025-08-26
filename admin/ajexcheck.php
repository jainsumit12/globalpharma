<?php include "../admin/config.php";
session_start();
//error_reporting(0); ?>
<?php
if(isset($_GET['code1']))
{
	$code1=$_GET['code1']; 
 
 
	 $sqls="select Count(*) AS total from  blog where code1='".$code1."' ";
									$results=mysqli_query($conn,$sqls);
									 $mls=mysqli_fetch_array($results); 
									  $cous= $mls[0];
									  if($cous>'0')
									  {
									  		echo '<p style="background: green;
    color: #fff;
    padding: 10px;
    text-align: center;
    margin-bottom: 20px;
    color: white;">Product Code is Original</p>';
									  }
									  else{
									  	echo '<p style="background: #c75c5c;
    color: #fff;
    padding: 10px;
    text-align: center;
    margin-bottom: 20px;
    color: white;">Fake or mismatch of product code. please try again </p>';
									  }
 

}
             
                        ?>
                        
                       
 