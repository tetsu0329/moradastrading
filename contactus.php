<?php
	include ('navigation.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<style type="text/css">

.page_title{
  font-size: 25px;
  color: #1E1713;
  letter-spacing: 5px;
}

.contact_details{
	width: 90%;
}
.contact_desc{
	line-height: 2;
	font-size: 14px;
	float: left;
}

.phone{
	width: 40%;
	background-color: black;
}
.loc{
	
	width: 40%;
	background-color: black;
}
.det_container{
	border: 1px solid #e1e1e1;
	border-radius: 5px;
	width:  45%;
	height: auto;
	padding-top: 15px;
	float: left;
	margin: 10px;
	margin-left: 40px;
	margin-top: 30px;
	margin-bottom: 40px;

}
.details_img{
	width: 45px;
	padding: 10px;
}
.details_desc{
	width: 200px;
	font-size: 14px;
	color: #8c8c8c;
	line-height: 2;
}
.subpage_title{
  font-size: 16px;
  color: #1E1713;
  letter-spacing: 5px;
  margin-top: 250px;
}

.social{
	float: left;
	margin-left: 60px;
}
</style>
<body>
	<div class="container">
		<br>
		<p class="page_title text-center">CONTACT US</p>
		<hr>

		<center>
			<div class="contact_details">
				<p class="contact_desc">
				Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
				<br>
				</p>
			</div>
		</center>	

			<div class="det_container">
					<center><img src="images/phone.png" class="details_img"></center>
					<br><center><p class="details_desc">0123456789</p></center>
			</div>

			<div class="det_container">
					<center><img src="images/loc.png" class="details_img"></center>
					<br><center><p class="details_desc">Metro Manila City</p></center>
			</div>


			<p class="subpage_title text-center">GET IN TOUCH WITH US!</p>
			<br>
			<div class="social">
					<center><img src="admin/images/contact_icon/facebook.png" class="social_img"></center>
					<br><center><p class="details_desc">/moradastrading</p></center>
			</div>

			<div class="social">
					<center><img src="admin/images/contact_icon/twitter.png" class="social_img"></center>
					<br><center><p class="details_desc">/moradastrading</p></center>
			</div>

			<div class="social">
					<center><img src="admin/images/contact_icon/instagram.png" class="social_img"></center>
					<br><center><p class="details_desc">/moradastrading</p></center>
			</div>		

			<div class="social">
					<center><img src="admin/images/contact_icon/google-plus.png" class="social_img"></center>
					<br><center><p class="details_desc">/moradastrading</p></center>
			</div>	

			
	</div>

	
</body>
</html>
<?php
	include ('footer.php');
?>