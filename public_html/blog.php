<?php
 header('Content-Type: text/html; charset=utf-8');
require_once('private/DAO/database_api.php');

  $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM `blogs`";
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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name = "application-name" content="International Model United Nations">
		
				<meta property="og:image" content="https://www.internationalmun.org/images/banner.jpg">
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
			@media (min-width: 1200px){
.container {
    width: 925px !important;
}.con{
	width: 1170px !important;
}
}
.headd{
font-family: Khand;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: normal;

color: #15477A;
 src: url('khand/khand-v7-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Khand Bold'), local('Khand-Bold'),
       url('khand/khand-v7-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('khand/khand-v7-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('khand/khand-v7-latin-700.woff') format('woff'), /* Modern Browsers */
       url('khand/khand-v7-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('khand/khand-v7-latin-700.svg#Khand') format('svg');"
	
}
@font-face {
  font-family: 'Khand';
  font-style: normal;
  font-weight: 700;
  src: url('khand/khand-v7-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Khand Bold'), local('Khand-Bold'),
       url('khand/khand-v7-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('khand/khand-v7-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('khand/khand-v7-latin-700.woff') format('woff'), /* Modern Browsers */
       url('khand/khand-v7-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('khand/khand-v7-latin-700.svg#Khand') format('svg'); /* Legacy iOS */
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
	<body>
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
					
						<p style="font-size: 15px !important;margin-left:62px !important;">International <small><br>Model United Nations</small></p>				
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
		</nav><title>Blogs</title>

<style>
		.navbar{
	overflow: unset !important;
}
	.manu{
		font-family: Montserrat;

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
}.active1{
font-family: Montserrat !important;
font-style: normal !important;
font-weight: 600 !important;
font-size: 12px !important;
line-height: normal !important;
text-align: center !important;
	border-bottom: 2px solid #fab449;
color: #FFFFFF !important;
}

	#imun-oncampus-heading{
		padding-top: 100px;
	}
	#imun-detailed-oncampus .box{
		box-shadow: 0 6px 16px 0 rgba(115,143,147,.4);
		background: white;
		padding:25px;
	}
	#imun-detailed-oncampus h3{
		font-weight: bolder;
	}
	#imun-detailed-oncampus p{
		font-size: 15px;
		line-height: 24px;
		text-align: justify;
	}
	#imun-detailed-oncampus ul li{
		line-height: 26px;
		font-size: 15px;

	}.obj{
border-left: 10px solid #FFB444;
border-radius: 10px;}

</style>

	<style type="text/css">
			@media screen and (min-width: 800px) {
#bg-text{
	font-size: 200px !important;
}

}




@media only screen and (max-width: 600px) {
#imun-register-heading{
	margin-top: 50px;
	height: 200px;
}
.row{
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 50px;
	margin-bottom: 60px;
}
.row2{
	margin-bottom: 0px;
	margin-top: 0px;
}

}
.hero-image {
 
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
   min-height: 220px;


}

.hero-text {
  text-align: justify;
  position: absolute;
  top: 20%;
  left: 35%;
  transform: translate(-50%, -50%);
  color: white;
  padding-bottom: 5%;

}
.hero-text3 {
  text-align: justify;
  position: absolute;
  top: 68%;
  left: 60%;
  transform: translate(-21%, -50%);
  color: white;
  text-align: justify;
  padding-bottom: 5%;

}

.hero-text2 {
  text-align: center;
  position: absolute;
  top: 35%;
  left: 20%;
  transform: translate(-50%, -50%);
  color: white;

}
	
	</style>
<body>
	
<div id = "imun-register-heading" style="height: 300px;">
	<div id="heading-background">
		<h1 id="bg-text" class = "text-center headd" style="
font-size: 80px;">Blogs</h1>
	</div>		
		<h2 class = "text-center" id = "heading" style="padding-top: 8%;"><b style="font-family: Khand;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: normal;
text-align: center;

color: #15477A;">Blogs</b></h2>
</div>
	
<section style="padding-bottom: 10%;">
	<?php foreach ($stmt as $value) {
		?>
	
	<div class="container" >
<div class="row" style="background: #FFFFFF;
box-shadow: 0px 0px 20px rgba(49, 49, 49, 0.1);
border-radius: 10px;max-height: 430px;">
			<div class="col-md-4 hero-image" style="  box-shadow:    inset   -55px 0px 29px -1px #121E32; background-image: linear-gradient(180.15deg, rgba(18, 30, 50, 0.45) 28.58%, #121e32de 99.52%), url('images/blog/<?php echo($value['image']); ?>');max-height: 230px;">
<div class="">				
 <div class="hero-text">
    <span style="font-family: Montserrat;
font-style: normal;
font-weight: bold;

line-height: normal;
text-align: center;

color: #FFFFFF;"><?php echo($value['subject']); ?></span>
    
  </div>
  <br>
  <br>
  <div class="hero-text2">
    <h1 style="font-family: Montserrat;
font-style: italic;
font-weight: 500;
font-size: 12px;
line-height: 19px;
text-align: justify;

color: #E3E3E3;">Posted by <?php echo($value['posted_by']); ?></h1>
    
  </div>
</div><div class="">
  <!--<div class="hero-text3">
    <h1 style="font-family: Helvetica;
font-size: 14px;
line-height: 19px;
text-align: justify;

color: #FFFFFF;">share</h1><br><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.internationalmun.org/blog_page.php?blog_id=<?php  echo($value['id']);  ?>  " target="_blank"><img src="images/icon/facebook-logo.png" style="max-height: 18px; max-width: 18px;"></a><a href="http://twitter.com/share?&amp;url=http://blog.internationalmun.org/quality-vs-quantity-of-delegates-what-matters-the-most-in-a-mun/"  target="_blank">
<img src="images/icon/twitter.png" style="max-height: 18px; max-width: 18px;"></a>

<a href="http://www.linkedin.com/shareArticle?url=http://blog.internationalmun.org/quality-vs-quantity-of-delegates-what-matters-the-most-in-a-mun/" target="_blank" >
<img src="images/icon/linkedin.png" style="max-height: 18px; max-width: 18px;"></a>

  </div>-->
</div>

			</div>
			<div class="col-md-6" style="padding: 2% 2% 2% 2%; text-align: justify;"><p style="max-height: 200px;overflow: hidden;"><?php echo($value['content_1']); ?></p><a href="blog_page.php?blog_id=<?php echo $value['id']; ?>" style="color: black;background-color: #f9c579; border-radius: 20px;padding: 2px 2px 2px 2px;">Read More</a></div>
			<div class="col-md-2">
				<span style="position: absolute;top: 0px;font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 16px;
line-height: normal;

color: #FFFFFF; right: 0px; background: #121E32;
border-radius: 0px 10px 0px 0px; padding: 7% 7% 7%  7%;"><?php echo $value['date']; ?></span>
			</div>
		</div></div><br><br><?php } ?>
		<!-- <div class="row" style="background: #FFFFFF;
box-shadow: 0px 0px 20px rgba(49, 49, 49, 0.1);
border-radius: 10px;">
			<div class="col-md-4 hero-image" style="  box-shadow:    inset   -55px 0px 29px -1px #121E32;background-image: linear-gradient(180.15deg, rgba(18, 30, 50, 0.45) 28.58%, #121e32de 99.52%), url('images/blog/2.jpg');">
<div class="">				
 <div class="hero-text">
    <span style="font-family: Montserrat;
font-style: normal;
font-weight: bold;

line-height: normal;
text-align: center;

color: #FFFFFF;">IMUN: Where Your Voice Can Change the World
</span>
    
  </div>
  <br>
  <br>
  <div class="hero-text2">
    <h1 style="font-family: Montserrat;
font-style: italic;
font-weight: 500;
font-size: 12px;
line-height: 19px;
text-align: justify;

color: #E3E3E3;">Posted by Admin</h1>
    
  </div>
</div><div class="">
  <div class="hero-text3">
    <h1 style="font-family: Helvetica;
font-size: 14px;
line-height: 19px;
text-align: justify;

color: #FFFFFF;">share</h1><br><a href="https://www.facebook.com/sharer/sharer.php?u=http://blog.internationalmun.org/imun-where-your-voice-can-change-the-world/" target="_blank"><img src="images/icon/facebook-logo.png" style="max-height: 18px; max-width: 18px;"></a><a href="http://twitter.com/share?&amp;url=http://blog.internationalmun.org/imun-where-your-voice-can-change-the-world/"  target="_blank">
<img src="images/icon/twitter.png" style="max-height: 18px; max-width: 18px;"></a>

<a href="http://www.linkedin.com/shareArticle?url=http://blog.internationalmun.org/imun-where-your-voice-can-change-the-world/" target="_blank">
<img src="images/icon/linkedin.png" style="max-height: 18px; max-width: 18px;"></a>

    
  </div>
</div>

			</div>
			<div class="col-md-6" style="padding: 2% 2% 2% 2%; text-align: justify;">International Model United Nations (IMUN) has taken a commendable step in providing a platform to the young generation to express their thoughts about the most contentious issues facing this planet. It is the youth who are the drivers of the economy, polity, governance, society, culture, and administration of a nation. In today’s date, when the world is facing grave issues like terrorism on a large scale and when climate change has reached unprecedented levels, it becomes imperative to give a voice to the young generation to come forth and....<a href="blog_page2.html" style="color: black;background-color: #f9c579; border-radius: 20px;padding: 2px 2px 2px 2px;">Read More</a></div>
			<div class="col-md-2"><span style="position: absolute;top: 0px;font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 16px;
line-height: normal;

color: #FFFFFF; right: 0px; background: #121E32;
border-radius: 0px 10px 0px 0px; padding: 7% 7% 7%  7%;">Nov <br> 15</span>
<span style="position: absolute;bottom:0px;font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 16px;
line-height: normal;

color: #FFFFFF; right: 0px; background: #FBB54D;
border-radius: 0px 0px 10px 0px; padding: 7% 7% 7%  7%;">READ <br> More</span></div>
		</div><br><br>
			<div class="row" style="background: #FFFFFF;
box-shadow: 0px 0px 20px rgba(49, 49, 49, 0.1);
border-radius: 10px;">
			<div class="col-md-4 hero-image" style="  box-shadow:    inset   -55px 0px 29px -1px #121E32;background-image: linear-gradient(180.15deg, rgba(18, 30, 50, 0.45) 28.58%, #121e32de 99.52%), url('images/blog/3.jpg');">
<div class="">				
 <div class="hero-text">
    <span style="font-family: Montserrat;
font-style: normal;
font-weight: bold;

line-height: normal;
text-align: center;

color: #FFFFFF;">Le Modèle des Nations Unies où Les Jeunes Se Présentent</span>
    
  </div>
  <br>
  <br>
  <div class="hero-text2">
    <h1 style="font-family: Montserrat;
font-style: italic;
font-weight: 500;
font-size: 12px;
line-height: 19px;
text-align: justify;

color: #E3E3E3;">Posted by Admin</h1>
    
  </div>
</div><div class="">
  <div class="hero-text3">
    <h1 style="font-family: Helvetica;
font-size: 14px;
line-height: 19px;
text-align: justify;

color: #FFFFFF;">share</h1><br><a href="https://www.facebook.com/sharer/sharer.php?u=http://blog.internationalmun.org/le-modele-des-nations-unies-ou-les-jeunes-se-presentent/" target="_blank"><img src="images/icon/facebook-logo.png" style="max-height: 18px; max-width: 18px;"></a><a href="http://twitter.com/share?&amp;url=http://blog.internationalmun.org/le-modele-des-nations-unies-ou-les-jeunes-se-presentent/" target="_blank">
<img src="images/icon/twitter.png" style="max-height: 18px; max-width: 18px;"></a>
<a href="http://www.linkedin.com/shareArticle?url=http://blog.internationalmun.org/le-modele-des-nations-unies-ou-les-jeunes-se-presentent/" target="_blank">
<img src="images/icon/linkedin.png" style="max-height: 18px; max-width: 18px;"></a>

    
  </div>
</div>

			</div>
			<div class="col-md-6" style="padding: 2% 2% 2% 2%; text-align: justify;">Ce matin-là, au Bangkok Palace Hôtel, le hall semblait occupé par l’arrivée de délégués internationaux du Modèle des Nations Unies venus des pays différents. Beaucoup de délégués étaient arrivés à Bangkok la veille et avaient séjourné dans un autre hôtel avant de s’inscrire le 1er juin 2018. L’atmosphère tamisée et chaleureuse de Bangkok n’a pas freiné l’enthousiasme des participants et le comité a commencé l’événement prévu ce jour-là. . Alors, quel est le Modèle des Nations Unies ou communément appelé MNU? Peut-être, certains d’entre vous savent déjà ce que.....<a href="blog_page3.html" style="color: black;background-color: #f9c579; border-radius: 20px;padding: 2px 2px 2px 2px;">Read More</a></div>
			<div class="col-md-2"><span style="position: absolute;top: 0px;font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 16px;
line-height: normal;

color: #FFFFFF; right: 0px; background: #121E32;
border-radius: 0px 10px 0px 0px; padding: 7% 7% 7%  7%;">Oct <br> 07</span></div>
		</div> -->
		
	</div>
</section>



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
	<script>
		$(function () {
			$(document).scroll(function () {
				var $nav = $(".navbar-fixed-top");
				var $list = $(".navbar-right li a");
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
				$list.toggleClass('list-scroll', $(this).scrollTop()>$list.height());

			});
		});

	</script>

</body>


</html>


