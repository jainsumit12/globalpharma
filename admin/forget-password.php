<?php
session_start();
include'config.php';
if(isset($_POST['login']))
{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$query = "select * from admin_account where admin_account_email ='$email' AND admin_account_password ='$password'";
	$run = mysqli_query($conn,"$query");
	if(mysqli_num_rows($run)>0)
	{
		$_SESSION['email'] = $email;
echo "<script>window.open('index.php','_self')</script>";	

		}
else    
          {
		
		echo "<script>alert('Email or password is incorrect')</script>";
		
		}

	}

?>
<?php 

if(isset($_POST['Submit1']))
{
	   $email =$_POST['forget_email'];  
	
	if($email=="")	{
		 echo "<script>alert('Enter Email ID ')</script>";
	}
	else if(filter_var($email, FILTER_VALIDATE_EMAIL))	{
		
		     $result1="SELECT count(*) as total from admin_account where admin_account_email='$email'";
			$run1=mysqli_query($conn,$result1);
	    	$data1=mysqli_fetch_assoc($run1);
             $usert= $data1['total'];
		
//	echo  $query = "select * from users where email='$email'";
//	$run = mysqli_query($conn,$query);
//	echo $coun=mysqli_num_rows($run);
	if( $usert > '0')
	{
	 //$_SESSION['email'] = $email;
	    $num12 = (rand(10, 100));
		$num123 = date("dmY");
		$num1234 = (rand(10, 100));
		$currentId = $num12 .'$/'. $num123 .'\#'.$num1234 ;
         $query = "UPDATE  admin_account  SET admin_account_password='$currentId'  where admin_account_email='$email' ";
	    $run = mysqli_query($conn,$query);
 
 $subject = "Password Updated Link ! You have Sucessfully Updated Password on pro-market.in";
$from .= "MIME-Version: 1.0\r\n";
$from .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       $from="info@pro-market.in";          //Your valid email address here

       $message_body = "Updated Password 
       
     Email ID : $email
     Passowrd : $currentId";

       mail($email,$subject,$message_body,"From:".$from);
 
      
echo "<script>alert('Email has sent to ".$email."')</script>";
 echo'<script>location.assign("login.php")</script>';
		}
else    {
		 echo "<script>alert('Email ID is Incorrect')</script>";
		 }

	}
	else{
		 echo "<script>alert('Enter a Valid Email ID')</script>";
	}
	
	}

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">

<link rel="shortcut icon" href="img/ico/favicon.png">
    <title>Tea Trading</title>
    
    
   <link rel="stylesheet" href="css/style_login.css">

  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" action="login.php" method="post" enctype="multipart/form-data" name="myForm" id="form">
			<input type="email" placeholder="Email-Id" name="forget_email" required>
		 
			<button type="submit" id="" name="Submit1">Log in </button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
