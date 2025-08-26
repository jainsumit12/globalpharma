<?php 
include "admin/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- <link rel="icon" href="https://Global-Labs.com/favicon.ico"> -->
<title>GLOBAL LABS</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/font.css" rel="stylesheet">
<link href="css/jquery-impromptu.css" rel="stylesheet">
</head>
<body>
<main role="main" id="main">
<div class="container">
<div class="row">
<div class="col-sm-3">
<aside>
<div class="logo pt-4">
<?php
 $query = "select * from logo where id='1'";
                                          $run = mysqli_query($conn, "$query");
                                          if (mysqli_num_rows($run) > 0) {
                                                while ($row = mysqli_fetch_assoc($run)) {
                                                      echo '<a href=""><img alt="logo" class="img-fluid" style="border-radius: 50px; size: 40px;"" src="images/logo/' . $row['img'] . '"></a>';
                                                }
                                          }
                                          ?>
<!-- <a href="index.php"> <img src="images/Gold-bond-logo.png" alt="Gold-bond-logo" class="img-fluid"> </a> -->
</div>
<div class="nav-side-menu mt-5 mb-5">
<div class="menu-list">
<ul id="menu-content" class="menu-content collapse out">
<li class="active"><a href="index.php"> <i class="fa fa-home"></i> Home </a></li>
<li data-toggle="collapse" data-target="#service" class="collapsed">
<a href="#"><i class="fa fa-list"></i> Products <i class="fa fa-down"></i></a>
</li>
<ul class="sub-menu collapse" id="service">
<?php 
      $sss="SELECT * from subcategory";
      $rs=mysqli_query($conn,$sss);
      foreach($rs as $key=> $sliders)
      {
      ?> 
<li><a href="<?php echo $sliders['url']?>.php"><?php echo $sliders['subcategory_name'] ?> </a></li>
<?php } ?>
</ul>
<li><a href="check-code.php"> <i class="fa fa-search"></i> Check Code </a></li>
<li><a href="contact-us.php"> <i class="fa fa-envelope"></i> Contact us </a></li>
</ul>
</div>
</div>
<!-- <div class="check-code">
<h2> Check Code </h2>
<p> Note: Each product can only be authenticated once. </p>
<form action="" method="post" id="frmOffer" name="frmOffers">
<input type="hidden" name="asd" />
<div class="input-group">
<input type="text" class="form-control" id="txtoffercode" placeholder="Authentication Key" name="txtoffercode" autocomplete="off" onKeyPress="return blockSpecialChar(event)">

<span class="input-group-btn">
<button type="submit" class="btn btn-warning" id="check_code" name="check_code">Check</button><br>
<span class="error_msg" style=" font-size: 10px; color: #cd0106;"></span>
</span>
</div>
</form>
</div> -->
<div class="product">
<!-- <img src="images/gonadorelin.jpg" class="img-fluid" alt="GOLD BOND LABS"> -->
</div>
<!-- <div class="social-connect">
<h3 class="mb-3 pb-2"> Connect With Us </h3>
<a href="https://www.facebook.com/Gold-Bond-Peptides-101429137305232" target="_blank" class="fb"><i class="fa fa-facebook"></i></a>
<a href="https://www.youtube.com/channel/UCHfph847iP894rBVbSvDq7Q" target="_blank" class="you"><i class="fa fa-youtube"></i></a>
<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
<a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
</div> -->
<div id="google_translate_element"></div>
</aside>
</div>