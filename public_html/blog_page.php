<?php
 header('Content-Type: text/html; charset=utf-8');

$id=$_GET['blog_id'];
require_once('private/DAO/database_api.php');

  $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM `blogs` where `id`=$id ";
        $sql1="SET CHARACTER SET 'utf8'";
        $sql2="SET SESSION collation_connection ='utf8_unicode_ci'";
        $stmt = $conn->query($sql1);
        $stmt = $conn->query($sql2);
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

  
      

  
      
?>
<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name = "application-name" content="International Model United Nations">
				<meta property="og:image" content="https://www.internationalmun.org/images/blog/<?php echo($stmt[0]['id']); ?>">
		<meta name="description" content="International Model United Nations (IMUN) brings youth together from around the world to learn and share ideas from a diverse set of experiences and backgrounds where the Executive board, International Press and International Delegates consolidate to learn about diplomacy, international relations, and the United Nations.">

		<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type = "text/javascript" src = "cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
		<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
		<link rel="icon" href="images/Coloured_Logo.jpg">
		<!-- Global site tag (gtag.js) - Google Ads: 779655741 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-779655741"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-779655741');
</script>
		<!-- Global site tag (gtag.js) - Google Ads: 779655741 --> 
	<style type="text/css">
	@media only screen and (max-width: 600px) {
.pos{
	margin-bottom: 20px;
}
}
			@media (min-width: 1200px){
				.pos{
					position: absolute;
					bottom: -620px !important;
					width: 80%;
				}
.container {
    width: 925px !important;
}.con{
	width: 1170px !important;
}
}textarea{
	width: 100%;
}
	</style>	
		 <script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'connect.facebook.net/en_US/fbevents.js');
 fbq('init', '336654900172750'); 
fbq('track', 'PageView');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132542716-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132542716-1');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=336654900172750&amp;ev=PageView&amp;noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
	</head>
	<body style="overflow-x: unset;">
	    <div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v3.3'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=install_email
  page_id="128351647837657">
</div>
		<!-- Header Section Start -->
<nav class="navbar navbar-default main-navigation imun-navigation navbar-fixed-top" role="navigation" style="background-color: #121E32; border: 0px solid #ffffff00; box-shadow: 0 0 0 0 ; height: 70px;">
			<div class="container con">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand logo" href="index.php">
						<span><img src = "images/logo.png" alt = "imun-logo" class = "imun_logo"></span>
					
						<p style="font-size: 15px !important">International <small><br>Model United Nations</small></p>				
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-right" >
							<li class=""><a href="index.php">Home</a></li>
						<li><a href="Aboutus.html">About Us</a></li>
							<li class = "dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Conferences
								</a>
							<ul class="dropdown-menu" style="margin-top: 5px; left:0; color: white; background-color: #0e3660;">
								<li><a href="IMUN_2018.html" style="color: white;">IMUN Thailand 2018</a></li><hr style="margin: 0px 10px 0px 10px">
								<li><a href = "imun_vietnam.html"> IMUN Vietnam 2019</a></li><hr style="margin: 0px 10px 0px 10px">
								<li><a href = "IMUN_2019.html">IMUN Egypt 2019 </a></li><hr style="margin: 0px 10px 0px 10px"><li><a href = "imun_china.html">IMUN China 2019 </a></li>
								
								
							</ul>
						</li>
						
					
					
					
						<li><a href="OnCampus.html">On Campus</a></li>
						<li><a href="Jointeam.html">Join Us</a></li>
						<li><a href="Sponsorus.html">Sponsor Us</a></li>
						<li class="active1"><a href="blog.php">Blogs</a></li>
						<li><a href="index.php#con">Contact Us</a></li>
			
					</ul>
				</div>
			</div>
		</nav><title><?php echo($stmt[0]['subject']); ?></title>
<style>
		.navbar{
	overflow: unset !important;
}
	.manu{
		font-family: Montserrat;
}
font-style: normal;
font-weight: 500 !important;
font-size: 12px;
line-height: normal  !important;

color: #BABABA  !important;

	}
	.manuu{
		font-family: Montserrat;
font-style: normal;
font-weight: 500 !important;
font-size: 12px;
line-height: normal  !important;

color: #BABABA  !important;

	
	}
	.manu:hover{
		font-family: Montserrat;
font-style: normal;
font-weight: 600 !important;
font-size: 12px;
line-height: normal !important;
text-align: center;

color: #FFFFFF !important;
	}
	.navbar ul li:hover{
	border-bottom: 2px solid #fab449;
	
}
.navbar-nav>li>.dropdown-menu>li>a {
	color: white !important;
	padding: 15px 15px 15px 20px;
}
.navbar-nav>li>.dropdown-menu>li>a:hover {
	color: white !important ;
	background-color: initial !important;
	}
.inner li{
	border:unset !important;
}
.navbar ul li a{
	font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 12px;
line-height: normal;


}
.navbar ul li a:hover{
font-family: Montserrat;
font-style: normal;
font-weight: 600;
font-size: 12px;
line-height: normal;
text-align: center;

color: #FFFFFF !important;
}
.active1{
font-family: Montserrat !important;
font-style: normal !important;
font-weight: 600 !important;
font-size: 12px !important;
line-height: normal !important;
text-align: center !important;
	border-bottom: 2px solid #fab449;
color: #FFFFFF !important;
}
	#imun-detailed-conference p{
		text-align: justify;
		font-size: 15.5px;
	}
	#imun-conference-heading{
		padding-top: 100px;
	}
	#imun-detailed-conference .box{
		box-shadow: 0 6px 16px 0 rgba(115,143,147,.4);
		background: white;
		padding:25px;
	}
	#imun-detailed-conference h3{
		font-weight: bold;
		font-size: 22px;
		letter-spacing: 0.8px;
	}
	.speaker-box{
		padding:10px;
		border:2px solid lavender;
	}
	.speaker-box h4{
		font-size: 17px;
		padding-top: 12px;
	}
	.speaker-box .btn{
		background: #15477a;
		color:white;
		padding: 05px 15px 05px 15px;
		border:1px solid white;
		border-radius: 22px;
		font-size: 15px;
		letter-spacing: 0.8px;
		/*			font-weight: bold;*/
	}
	#conference-speakers{
		padding-top:20px;
		padding-bottom: 20px;
	}
	#conference-glimpse{
		background: #f3f7f7;
		padding-top: 20px;
		padding-bottom: 20px;
	}
	#conference-glimpse .btn{
		background: #15477a;
		color:white;
		padding: 05px 15px 05px 15px;
		border:1px solid white;
		border-radius: 22px;
		font-size: 15px;
		letter-spacing: 0.8px;
		box-shadow: 0 6px 16px 0 rgba(115,143,147,.4);

	}
	#imun-detailed-conference .nav-tabs>li {
		border-right: 1px solid lavender;
	}
	#imun-detailed-conference .tab-content{
		padding-top: 20px;
	}
	#conference-council img{
		width: 100%;
	}
	#conference-speakers img{
		margin-left: auto;
		margin-right: auto;
		display: block;
	}
.hero-image {
  background-image: linear-gradient(180.15deg, rgba(18, 30, 50, 0) 28.58%, #121E32 99.52%), url("images/blog/<?php echo($stmt[0]['image']); ?>");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
   min-height: 300px;
}

</style>
	<section style="margin-top: 100px;">
	<div class="container">
	<div class="hero-image" style="background-color: green;">



</div>
</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="col-md-8" style="font-family: Montserrat;
font-style: normal;
font-weight: 600;
font-size: 24px;
line-height: 38px;

color: #121E32;
"><?php echo($stmt[0]['subject']); ?></div><div class="col-md-4" style="text-align: right;"><span style="font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: normal;
text-align: right;

color: #121E32;"><?php echo($stmt[0]['date']); ?><br><span style="font-family: Montserrat;
font-style: italic;
font-weight: 500;
font-size: 18px;
line-height: 29px;
text-align: right;

color: #FBB54D">Posted by <?php echo($stmt[0]['posted_by']); ?></span></div>
			</div>
		
			<div>
				
			</div>
			
		</div>
		<div class="col-md-10">
			<p style="text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 20px;
text-align: justify;

color: #474747;">
			<?php echo($stmt[0]['content_1']); ?><br><br>
			<?php echo($stmt[0]['content_2']); ?><br><br>
			<?php echo($stmt[0]['content_3']); ?><br><br>
			<?php echo($stmt[0]['content_4']); ?><br><br>
			<?php echo($stmt[0]['content_5']); ?><br><br>
</p>
		</div>
			<div class="col-md-2">
		
				
				<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.internationalmun.org/blog_page.php?blog_id=<?php  echo($stmt[0]['id']);  ?> " target="_blank"> <img src="images/icon/facebook-logo.png" style="max-width: 30px; max-height: 30px;"></a><br><br>
					<a href="http://twitter.com/share?&amp;url=https://www.internationalmun.org/blog_page.php?blog_id=<?php  echo($stmt[0]['id']);  ?>" target="_blank">	<img src="images/icon/twitter.png" style="max-width: 30px; max-height: 30px;"></a><br><br>
						
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.internationalmun.org/blog_page.php?blog_id=<?php  echo($stmt[0]['id']);  ?>&title<?php  echo($stmt[0]['subject']);  ?>" target="_blank">	<img src="images/icon/linkedin.png" style="max-width: 30px; max-height: 30px;"></a><br><br>
								
			</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('#hanoi-lists').DataTable();
	});

</script>

	<section id = "imun-footer" style="background-color: #0E3660">
			<div class = "container">
				<div class="row">
				<div class="col-md-12 col-xs-4" style="max-width: 980px;text-align: left;margin-left: 2%;">
					
			<div class="col-md-2">
						<a href="Aboutus.html" style="color: white;">About Us</a>
					</div>
					<div class="col-md-2">
						<a href="index.php#conf" style="color: white;">Conference</a>
					</div>
					
			
					<div class="col-md-2">
						<a href="index.php#testi" style="color: white;">Testimonials</a>
					</div>
					<div class="col-md-2">
						
							<a href="index.php#con" style="color: white;">Contact Us
								</a>
							
					</div>
					<div class="col-md-2">
						<a href="blog.php" style="color: white;">Blogs</a>
					</div>
					<div class="col-md-2">
						<a href="terms-and-conditions.html" style="color: white;">Terms & Conditions</a>
					</div>

					<br><br><br>
				</div><div class="col-md-12 col-xs-7" style="">
					<div class="col-md-1">
						
					</div>
					<div class="col-md-3"><div class="row">
						<div class="col-md-4 col-xs-2" style="padding: unset;"><img src="images/icon/2 (3).png" style="max-height: 26px; max-width: 26px; float: right;" ></div><a href="tel:(+91) 999 741 5973"><div style="font-family: Roboto;
font-style: normal;
font-weight: 300;
font-size:14px;
line-height: normal;

color: #FFFFFF; padding: 4px;" class="col-md-8" > Phone<br>(+91) 999 741 5973 </div></a>
</div>
					</div>	<div class="col-md-4">
						<div class="row">
						<div class="col-md-4 col-xs-2" style="padding: unset;"><img src="images/icon/2 (1).png" style="max-height: 26px; max-width: 26px; float: right;" ></div><a href="mailto:info@internationalmun.org"><div style="font-family: Roboto;
font-style: normal;
font-weight: 300;
font-size:14px;
line-height: normal;

color: #FFFFFF; padding: 4px;" class="col-md-8 col-xs-10" > Email<br>info@internationalmun.org </div></a>
</div>
					</div>
					<div class="col-md-4">
						<div class="row">
						<div class="col-md-2 col-xs-2" style="padding: unset;"><img src="images/icon/2 (2).png" style="max-height: 26px; max-width: 26px; float: right;" ></div><div style="font-family: Roboto;
font-style: normal;
font-weight: 300;
font-size:14px;
line-height: normal;

color: #FFFFFF; padding: 4px;" class="col-md-10 col-xs-10" > Address<br>Sector 50, Gautam Budh Nagar, Noida, India - 201 304 </div>
</div>
					</div>
				
				

				</div>
			</div><div class="imun-social" style="text-align: center; padding-top: 5%;">
				
								
									<a href="https://www.facebook.com/internationalmun2018/" target="_blank"><img src="images/f.png" style="max-width: 18px ; max-height: 18px;"></a>     <a href="https://www.instagram.com/international_mun/" target="_blank"><img src="images/ii.png" style="margin-left: 2px; max-height: 22px; max-width:  20px;padding-top: 2px;"></a>
									<a href="https://www.linkedin.com/company/international-mun/" target="_blank"><img src="images/icon/linkedin.png" style="max-width: 18px ; max-height: 16px;margin-left: 2px;"></a>     <a href="https://twitter.com/imun_18" target="_blank"><img src="images/icon/twitter.png" style="margin-left: 2px; max-height: 18px; max-width:  18px;"></a>
									</div>
			
				<h4 style="text-align: center;  padding-top: 5%; color: white;">Copyright © 2018-2019, International Model United Nations </h4>
				<h4 class="pull-right"></h4>
			</div>
		</section>
		

		

<script>
  window.addEventListener('load',function(){
    jQuery('[href="http://www.internationalmun.org/RegistrationForm.php"]').click(function(){
      gtag('event', 'conversion', {'send_to': 'AW-779655741/SznJCOiDqpMBEL204vMC'});
    })

    jQuery('[id="submit_form"]').click(function(){
      gtag('event', 'conversion', {'send_to': 'AW-779655741/YdUeCKGqsJMBEL204vMC'});
    })
  })
</script>
</body>


</html>