<?php 
require 'sidebar.php';
?>
<div class="col-sm-9">
<div class="content">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">

<?php 

      $ss="SELECT * from mainslider";
      $r=mysqli_query($conn,$ss);
      $cnt = 1;
      foreach($r as $key=> $slider)
      {
         if($cnt == 1){
           $active = 'active';
         }else{
          $active = '';
         }
        
      ?>
   <ol class="carousel-indicators">   
<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $slider['id'];?>" class="<?php echo $active; ?>"></li>       

</ol>
<div class="carousel-item  <?php echo $active; ?>" rel="<?php echo $cnt; ?>">
<img class="d-block img-fluid" src="images/slider/<?php echo $slider['image'];?>" alt="First slide">
</div>
<!-- <div class="carousel-item">
<img class="d-block img-fluid" src="images/slide2.jpg" alt="Second slide">
</div> -->


<?php  $cnt++;  } ?>	

</div>

</div>
<article class="welcome mt-5">
<h3 class="mb-3"> Welcome to <span class="theme-color">GLOBAL</span> LABS </h3>
<p> Since formation in 2013 Global-Labs has grown from strength to strength and is now recognised as a leading pharmaceutical manufacturer and trusted global supplier of champion grade performance enhancing products. Renown for providing a unique, extensive and complex range, from solid fundamentals to exciting exotic compounds, including specialised synthesised blends that others companies care not to produce – all created to scientifically enhance the hard work you put in whilst being kind on your pocket too! We strive to remain at the cutting edge of bodybuilding science, to innovate, continually update and share our knowledge. </p>
<p> Our organisation is manned by people with expertise, experience and current recognition in their chosen field. We believe in producing products of the very best quality matched by excellent customer service. Through our commitment to consistency, we are proud to say our products have become easily recognised, trusted and highly acclaimed throughout the bodybuilding community. Our website has been created to raise global awareness, to enable you easier access to accurate information and support and to increase availability of our first class products at an affordable price. </p>
<p> Global-Labs specializes in the synthesis of highly purified peptides, proteins and amino acid derivatives for scientific research and development. Global-Labs uses automated, and manual peptide synthesizers as well as solution and solid-phase peptide synthetic technology to offer the finest quality peptides and proteins that exceed 99% purity. From the initial stages of peptide synthesis to packaging and delivery, our company implements the most stringent quality control standards to ensure that all peptides arrive in their purest and most stable form. In house testing at all stages of production at our analytical test lab verifies our peptides sequential fingerprints for precision accuracy. This is achieved through highly accurate High-Performance Liquid Chromatography and Mass Spectrometry analysis, which scientifically proves the purity, accuracy and identity of each peptide </p>
</article>

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
		  interval: 3000,
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
