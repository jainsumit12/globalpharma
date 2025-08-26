<?php 
require 'sidebar.php';
?>
<div class="col-sm-9">
<div class="content">
<article class="welcome"> <br>
<h3 class="mb-5"> Sarms </h3>
<?php
              $ff='SELECT * from product Where product_subcategory =3 order by id DESC  ';
              $gh=mysqli_query($conn,$ff);
              foreach($gh as $key=> $simi)
              {
			  $p_image="SELECT * from image_manager where p_sku='".$simi['sku']."' order by id ASC LIMIT 0,1";
	$result1=mysqli_query($conn,$p_image);
    $ml=mysqli_fetch_array($result1);
    foreach( $result1 as $key=> $ml)
	{
              ?>
<div class="blog-details">
<div class="row">
<div class="col-sm-7">

<h4><?php echo $simi['product_name'];?></h4>
<h2><span style="color:#999999"><?php echo $simi['short_description'];?></span></h2>
<a class="read-more" class="btn btn-primary" data-toggle="collapse" href="#<?php echo $simi['id'];?>" aria-expanded="false" aria-controls="collapseExample"> READ MORE </a>
</div>
<div class="col-sm-5">
<figure>
<img src="images/product/<?php echo $ml['image'];?>" class="img-fluid" alt="gonadorelin">
</figure>
</div>
<div class="collapse" id="<?php echo $simi['id'];?>">
<div class="card card-body">
<?php echo $simi['description'];?>		
</div>
</div>
</div>
</div>
<?php } }?>
</div>
</div>
</div>
</div>
</div>
</main>

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-impromptu.js"></script>
<script src="js/jquery.buttonLoader.js"></script>
<script src="js/function.js"></script>
<script src="js/pooper.js"></script>

<script src="js/bootstrap.min.js"></script>


<script src="js/ie10-viewport-bug-workaround.js"></script>
<script>
		$('.carousel').carousel({
		  interval: 3500,
		})
	</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'sg2plcpnl0220'},{'id':'4124450'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>
