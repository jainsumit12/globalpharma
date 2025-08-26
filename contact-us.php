<?php 
require 'sidebar.php';

?>
<div class="col-sm-9">
<div class="content">
<article class="welcome"> <br>
<h3 class="mb-5 mb-xs-1"> Contact <span class="theme-color">Us</span> </h3>
<form action="contact-us.php" method="post" name="contact-us">
<div class="row justify-content-center ">
<div class="col-md-8 contact-form">
<h4> SEND US A MESSAGE </h4>
<div class="form-group">
<select name="county" class="form-control" required="required">
<option value="">Select Country</option>
<option value="Afganistan">Afghanistan</option>
<option value="Algeria">Algeria</option>
<option value="Angola">Angola</option>
<option value="Argentina">Argentina</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Benin">Benin</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Djibouti">Djibouti</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="French Guiana">French Guiana</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Ghana">Ghana</option>
<option value="Great Britain">Great Britain</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Hawaii">Hawaii</option>
<option value="Hong Kong">Hong Kong</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Israel">Israel</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Korea North">Korea North</option>
<option value="Korea South">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Macau">Macau</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Mongolia">Mongolia</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Nevis">Nevis</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palestine">Palestine</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Rwanda">Rwanda</option>
<option value="St Helena">St Helena</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa American">Samoa American</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Uganda">Uganda</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Wake Island">Wake Island</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
<div class="form-group">
<input name="name" class="form-control" type="text"  placeholder="Enter Name"  required>
</div>
<div class="form-group">
<input name="email" class="form-control" type="email" placeholder="Enter Email ID" required>
</div>
<div class="form-group">
<input name="phone" class="form-control" type="text" onKeyPress="return isNumberKey(event);" placeholder="Enter Phone Number" maxlength="10" required="required">
</div>
<div class="form-group">
<select name="question" class="form-control" required="required">
<option value="interested-buying">Interested in buying </option>
<option value="product-question"> Product question</option>
</select>
 </div>
<div class="form-group">
<textarea name="query" class="form-control" rows="3" placeholder="Enter Query" required="required"></textarea>
</div>
<input name="submit" id="submit" value="Submit" class="btn btn-warning btn-block rounded-0" type="submit">
</div>
</div>
</form>
<?php 
$msg='';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$service=$_POST['question'];
	$query=$_POST['query'];		
	$county=$_POST['county'];

	$sql="INSERT into inquiry (username,email,phone,country,msg,service)VALUES ('$name','$email','$phone','$county','$query','$service')";
	$result=mysqli_query($conn,$sql);
	if ($result){
		$msg= '<p style="background: green;
		color: #fff;
		padding: 10px;
		text-align: center;
		margin-bottom: 20px;
		color: white;">Form Submitted Successfully</p>';
	}  else{
	  $msg='<p style="background: #c75c5c;
	  color: #fff;
	  padding: 10px;
	  text-align: center;
	  margin-bottom: 20px;
	  color: white;">Operation failed </p>';
	}    

}

if($msg!=''){
	echo $msg;
}
?>
</article>
</div>
</main>

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-impromptu.js"></script>
<script src="js/jquery.buttonLoader.js"></script>
<script src="js/function.js"></script>
<script src="js/pooper.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
		$(document).ready(function() {
		  $("#owl-demo").owlCarousel({		 
			  autoPlay: 3000, //Set AutoPlay to 3 seconds		 
			  items : 2,
			  itemsDesktop : [1199,3],
			  itemsDesktopSmall : [979,3],
		  });
		});
    </script>
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
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'sg2plcpnl0220'},{'id':'4124450'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html></html>
<?php 

		
		
?>