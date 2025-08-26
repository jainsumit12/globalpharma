<?php 
require 'sidebar.php';
?>
<div class="col-sm-9">
<div class="content">
<article class="welcome"> <br>
<h3 class="mb-5"> Check <span class="theme-color"> Code </span> </h3>
<div class="row justify-content-center mb-5">

<div class="col-md-6 mb-5">
<div class="check-code">
<h2 class="ml-0 mr-0"> Check Code </h2>
<p> Note: Each product can only be authenticated once. </p>
<input type="hidden" name="asd" />
<div class="input-group">
<input type="text" class="form-control" id="code1" placeholder="Authentication Key" name="user_name" autocomplete="off">

<span class="input-group-btn">
<button type="button" class="btn btn-warning" onclick="showUserfilter()" id="check_code2" name="check_code">Check</button><br>
<span class="error_msg" style=" font-size: 10px; color: #cd0106;"></span>

</span>

</div>
</div>
</div>
</div>
<div id="txtHintvar" style="    margin-top: 26px;"></div>

<div class="col-md-6 mb-5">
<h4> <center>Beware from these Fake Products,The Global Pharma does not sell peptides.</center> </h4>

</div>

<div lass="row justify-content-center mb-3">
    <img src="https://i.ibb.co/RPzSJHD/fake3.png" alt="fake3" border="0">
</div>
<div lass="row justify-content-center mb-3">
    <img src="https://i.ibb.co/gzmFpV5/fake2.png" alt="fake2" border="0">
</div>
<div lass="row justify-content-center mb-3">
    <img src="https://i.ibb.co/3SN6qzV/fake1.png" alt="fake1" border="0">
</div>
<div class="row justify-content-center mb-5">

<div class="col-md-6 mb-5">
<p> You Can Check the Expiry to ensure before purchasing. Every Product have a sticker with Scratch Code Which can be check on our website www.goldbond-labs.com. </p>
<p> We use QR Code, Holograms, Authentication Code and custom Desings Which are Unique and High Quality packaging among and are more Other measures to prevent from Counterfeiting.</p>
</div>
</div>
</article>
</div>
</div>
</div>
</div>
</main>

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-impromptu.js"></script>
<script src="js/jquery.buttonLoader.js"></script>
<!-- <script src="js/function.js"></script> -->
<script src="js/pooper.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/ie10-viewport-bug-workaround.js"></script>
<script>
		$('.carousel').carousel({
		  interval: 3500,
		})
	</script>
	 <script>
function showUserfilter() {
	// alert(str);
	//var id=$("#id").val();
//	alert(id);
	 
	 var code1=$("#code1").val();

  
    if (code1 == "") {
    	
        document.getElementById("txtHintvar").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHintvar").innerHTML = xmlhttp.responseText;
            }
        };
         
            xmlhttp.open("GET","admin/ajexcheck.php?code1=" +code1,true);
        xmlhttp.send();
    }
}
</script>	
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'sg2plcpnl0220'},{'id':'4124450'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>