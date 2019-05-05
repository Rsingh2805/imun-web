<?php

require_once('../private/DAO/database_api.php');
  $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM application ORDER BY id DESC LIMIT 3 ";
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
      
?>
<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<style type="text/css">
		/* khand-700 - latin */
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
		<meta charset="utf-8">
		<meta property="og:image" content="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name = "application-name" content="International Model United Nations">
		<meta name="description" content="International Model United Nations (IMUN) brings youth together from around the world to learn and share ideas from a diverse set of experiences and backgrounds where the Executive board, International Press and International Delegates consolidate to learn about diplomacy, international relations, and the United Nations.">
<script type="text/javascript" src="code.jquery.com/jquery-1.12.0.min.js"></script>
		<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<script type = "text/javascript" src = "cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
		<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
		<link rel="icon" href="images/Coloured_Logo.jpg">
		<!-- Global site tag (gtag.js) - Google Ads: 779655741 -->
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-779655741"></script>


<script>
	


  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.2'
    });
  };
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
<style type="text/css">
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
		
@media screen and (min-width: 800px) {
	
	.oo{
		margin-left: 370px !important;
	}
	.butt{
		padding: 4% 4% 4% 4% !important;
	}
	.inner{
		min-width: 865px;
		right: 170px !important;
	}#thumbnail-slider-prev{
left: -200px !important;
	}
	#thumbnail-slider-next{
		left: 740px !important;
	}
   .gamma-gallery{
		text-align: center;
		margin-left: 28% !important;

	}
    
	.three{
		left: 407px !important;
	}
	.five{
		height: 151px !important;
		width: 315px !important;
	}.five img{
		height: 151px !important;
		width: 315px !important;
	}
	.four{
		left: 565px !important;
		height: : 310px !important;
	}.four img{
		height: 310px !important;
		
	}.partner{
		margin-left: 3%;
	}.patner2{
		margin-left: 12%;
	}.con{
		width: 1170px !important;
	}.partner{
	height: 100px;
	width: 100px;
	margin-bottom: 50px;
}.swiper-slide img {
    max-width: 415px !important;
    max-height: 390px !important;
}.swiper-container{
	max-width: 800px;
}

	
}
.gamma-description{
	background:unset !important;
}
.partner{
	height: 100px;
	
	margin-bottom: 50px;
}.patner_name{
text-align: center;
width: 100px;
font-style: normal;
font-weight: 500;
font-size: 10px;
line-height: 16px;
text-align: center;
padding-top: 5px;
color: #15477A;

}




 
.testimonial{
    padding-right:30px ;
}
.pic > img{
    border-radius: 50%;
    float: left;
    margin-right: 30px;
}
.testimonial-review p{
    color: #888888;
    font-size: 14px;
    margin-bottom: 20px;
    font-weight: 400;
    line-height: 1.6;
}
.testimonial-title{
    color: #f69b37;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 0;
    line-height: 1.6;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #dc005a;
}
.owl-theme .owl-controls{
    margin-top: 30px;
}
@media screen and (max-width: 767px){
	.hero-text3 a h1{
		padding: 1% 1% 1% 1% !important;
	}	.hero-text3{
		left: 38% !important;
	}
	#subscribe-email{
		width: 80% !important;
	}
	.centr{
		text-align: center !important;
	}
	#blink1{
		width: 60% !important;
	}
	#blink2{
		width: 60% !important;
	}
	#blink3{
		width: 60% !important;
	}
    .testimonial{
        text-align: center;
        padding: 0 15px;
    }
    .pic > img{
        float: none;
        margin: 0 0 10px 0;
    }
    .sli{
    	margin-bottom: 0px !important;
    }
}

	
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script src="js/modernizr.custom.70736.js"></script>
	
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: true,
        autoPlay:true
    });
});
</script>


<style>
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



</style>


<link rel='stylesheet' id='wpforge-fonts-css'  href='wp-content/themes/wponlinesupport-plugins/fonts/fonts5697.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpforge-normalize-css'  href='wp-content/themes/wponlinesupport-plugins/css/normalize19ce.css?ver=3.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpforge-foundation-css'  href='wp-content/themes/wponlinesupport-plugins/css/foundation5697.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpforge-theme-css'  href='wp-content/themes/wponlinesupport-plugins/css/theme5697.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpforge-css'  href='wp-content/themes/wponlinesupport-plugins/style5697.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min3c21.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-aas-public-css-css'  href='wp-content/plugins/accordion-and-accordion-slider/assets/css/wp-aas-publicf269.css?ver=1.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpos-magnific-style-css'  href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/magnific-popup8d1e.css?ver=1.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpos-slick-style-css'  href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/slick8d1e.css?ver=1.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='aigpl-public-css-css'  href='wp-content/plugins/album-and-image-gallery-plus-lightbox/assets/css/aigpl-public8d1e.css?ver=1.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpos-swiper-style-css'  href='wp-content/plugins/app-mockups-carousel/assets/css/swiper.min5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-amc-public-css-css'  href='wp-content/plugins/app-mockups-carousel/assets/css/wp-amc-public5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='apwpultimate-jplayer-style-css'  href='wp-content/plugins/audio-player-with-playlist-ultimate/assets/css/jplayer.blue.monday.min665a.css?ver=APWPULTIMTE_VERSION' type='text/css' media='all' />
<link rel='stylesheet' id='apwpultimate-public-style-css'  href='wp-content/plugins/audio-player-with-playlist-ultimate/assets/css/apwpultimate-public-style4963.css?ver=1.1' type='text/css' media='all' />
<link rel='stylesheet' id='apwpultimate-font-awesome-css'  href='maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min4963.css?ver=1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bdpw-public-css-css'  href='wp-content/plugins/blog-designer-for-post-and-widget/assets/css/bdpw-public1f22.css?ver=1.6.2' type='text/css' media='all' />
<link rel='stylesheet' id='button-css-css'  href='wp-content/plugins/buttons-with-style/css/button-css4bf4.css?ver=1.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='button-foundation-css'  href='wp-content/plugins/buttons-with-style/css/foundation-icons4bf4.css?ver=1.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpcdt-public-css-css'  href='wp-content/plugins/countdown-timer-ultimate/assets/css/wpcdt-timecircles8d1e.css?ver=1.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='edd-styles-css'  href='wp-content/plugins/easy-digital-downloads/templates/edd.min562c.css?ver=2.9.11' type='text/css' media='all' />
<link rel='stylesheet' id='wpfp-public-style-css'  href='wp-content/plugins/featured-post-creative/assets/css/wpfp-publiccfa9.css?ver=1.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='fmgc-css-css'  href='wp-content/plugins/footer-mega-grid-columns/css/fmgc-cssc64e.css?ver=1.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='fagsfacf-public-style-css'  href='wp-content/plugins/frontend-gallery-slider-for-advanced-custom-field/assets/css/fagsfacf-public-css4e44.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='hbu-public-style-css'  href='wp-content/plugins/hero-banner-ultimate/assets/css/hbu-public-style5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp_html5video_css-css'  href='wp-content/plugins/html5-videogallery-plus-player/assets/css/video-js95b8.css?ver=2.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp_html5video_colcss-css'  href='wp-content/plugins/html5-videogallery-plus-player/assets/css/video-style95b8.css?ver=2.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpos-magnific-popup-style-css'  href='wp-content/plugins/html5-videogallery-plus-player/assets/css/magnific-popup95b8.css?ver=2.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-igsp-public-css-css'  href='wp-content/plugins/meta-slider-and-carousel-with-lightbox/assets/css/wp-igsp-public9632.css?ver=1.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='popupaoc-public-style-css'  href='wp-content/plugins/popup-anything-on-click/assets/css/popupaoc-public-style1159.css?ver=1.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-pap-public-css-css'  href='wp-content/plugins/portfolio-and-projects/assets/css/wp-pap-public97de.css?ver=1.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='wp-pap-portfolio-css-css'  href='wp-content/plugins/portfolio-and-projects/assets/css/portfolio.jquery97de.css?ver=1.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='pciwgas-publlic-style-css'  href='wp-content/plugins/post-category-image-with-grid-and-slider/assets/css/categoryimage-public4963.css?ver=1.1' type='text/css' media='all' />
<link rel='stylesheet' id='pgafu-public-style-css'  href='wp-content/plugins/post-grid-and-filter-ultimate/assets/css/pgafu-publicc358.css?ver=1.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='bld-public-css'  href='wp-content/plugins/post-list-designer/assets/css/bld-public4963.css?ver=1.1' type='text/css' media='all' />
<link rel='stylesheet' id='rpwd-public-style-css'  href='wp-content/plugins/recent-posts-widget-designer/assets/css/recent-post-widget-style5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='respslidercss-css'  href='wp-content/plugins/responsive-header-image-slider/css/responsiveimgsliderb12b.css?ver=3.1.1' type='text/css' media='all' />

<link rel='stylesheet' id='wphimgs_slidercss-css'  href='wp-content/plugins/sp-header-image-slider/css/jquery.bxslider4e44.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='cssnews-css'  href='wp-content/plugins/sp-news-and-widget/assets/css/stylenewseda1.css?ver=4.1.4' type='text/css' media='all' />
<link rel='stylesheet' id='wp-sk-public-css-css'  href='wp-content/plugins/stack-slider-3d-image-slider/assets/css/wp-sk-public4e44.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-ssc-public-css-css'  href='wp-content/plugins/swiper-slider-and-carousel/assets/css/wp-ssc-public62ea.css?ver=1.2' type='text/css' media='all' />
<link rel='stylesheet' id='wptu-front-style-css'  href='wp-content/plugins/ticker-ultimate/assets/css/wptu-front8d1e.css?ver=1.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='tahs-public-style-css'  href='wp-content/plugins/timeline-and-history-slider/assets/css/slick-slider-style9e1e.css?ver=1.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpwrps_style-css'  href='wp-content/plugins/woo-slick-related-product-slider/assets/css/wpwrps-publicf269.css?ver=1.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout10cb.css?ver=3.5.6' type='text/css' media='all' />
<style id='woocommerce-layout-inline-css' type='text/css'>

	.infinite-scroll .woocommerce-pagination {
		display: none;
	}
</style>
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen10cb.css?ver=3.5.6' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce10cb.css?ver=3.5.6' type='text/css' media='all' />

<link rel='stylesheet' id='wpawcaccordioncss-css'  href='wp-content/plugins/wp-accordion-with-categories/shortcode/css/jquery.accordion4963.css?ver=1.1' type='text/css' media='all' />
<link rel='stylesheet' id='cssblog-css'  href='wp-content/plugins/wp-blog-and-widgets/css/styleblog51a2.css?ver=1.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpfcas-font-awesome-css'  href='maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min9e1e.css?ver=1.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpfcas_style-css'  href='wp-content/plugins/wp-featured-content-and-slider/assets/css/featured-content-style9e1e.css?ver=1.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpfcas_slick_style-css'  href='wp-content/plugins/wp-featured-content-and-slider/assets/css/slick9e1e.css?ver=1.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='logo_showcase_style-css'  href='wp-content/plugins/wp-logo-showcase-responsive-slider-slider/assets/css/logo-showcase605a.css?ver=2.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='wmpci-public-style-css'  href='wp-content/plugins/wp-modal-popup-with-cookie-integration/assets/css/wmpci-public9632.css?ver=1.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='wppsac-public-style-css'  href='wp-content/plugins/wp-responsive-recent-post-slider/assets/css/recent-post-style4c56.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpsisac-public-style-css'  href='wp-content/plugins/wp-slick-slider-and-image-carousel/assets/css/slick-slider-style1f22.css?ver=1.6.2' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css'  href='maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min51a2.css?ver=1.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='tsas-public-style-css'  href='wp-content/plugins/wp-team-showcase-and-slider/assets/css/teamshowcase-style51a2.css?ver=1.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='wtwp-font-awesome-css'  href='maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min254d.css?ver=2.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='wptww-public-css-css'  href='wp-content/plugins/wp-testimonial-with-widget/assets/css/testimonials-style254d.css?ver=2.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='wtpsw-public-style-css'  href='wp-content/plugins/wp-trending-post-slider-and-widget/assets/css/wtpsw-publice7f0.css?ver=1.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpos-owl-style-css'  href='wp-content/plugins/wpos-owl-carousel-ultimate/assets/css/owl.carousel4e44.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpocup-public-style-css'  href='wp-content/plugins/wpos-owl-carousel-ultimate/assets/css/wpocup-public4e44.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='pcdfwoo_style-css'  href='wp-content/plugins/product-categories-designs-for-woocommerce/assets/css/slickc358.css?ver=1.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='wcpscwc_public_style-css'  href='wp-content/plugins/woo-product-slider-and-carousel-with-category/assets/css/wcpscwc-public4e44.css?ver=1.3' type='text/css' media='all' />
<link rel='stylesheet' id='ptf-pricing-tables-css-css'  href='wp-content/plugins/pricing-tables-for-easy-digital-downloads/assets/css/ptf-pricing-tables20b9.css?ver=1.0.2' type='text/css' media='screen' />
<link rel='stylesheet' id='social-logos-css'  href='wp-content/plugins/jetpack/_inc/social-logos/social-logos.min68b3.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='wp-content/plugins/jetpack/css/jetpack03db.css?ver=7.1.1' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='wp-content/themes/wponlinesupport-plugins/js/vendor/modernizrf7ff.js?ver=2.8.3'></script>
<script type='text/javascript' src='wp-content/plugins/responsive-header-image-slider/js/jquery.slides.minb12b.js?ver=3.1.1'></script>
<script type='text/javascript' src='wp-content/plugins/sp-faq/js/jquery.accordiond617.js?ver=3.3.2'></script>
<script type='text/javascript' src='wp-content/plugins/sp-header-image-slider/js/jquery.bxslider.min4e44.js?ver=1.3'></script>
<script type='text/javascript' src='wp-content/plugins/sp-news-and-widget/assets/js/jquery.newstapeeda1.js?ver=4.1.4'></script>
<script type='text/javascript' src='wp-content/plugins/sp-news-and-widget/assets/js/sp-news-publiceda1.js?ver=4.1.4'></script>
<script type='text/javascript' src='wp-content/plugins/wp-accordion-with-categories/shortcode/js/jquery.accordion4963.js?ver=1.1'></script>



<style type='text/css'>img#wpstats{display:none}</style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<style type="text/css">
.wmpci-popup-open, .wmpci-popup-open body{

	overflow: unset !important;
}

.apwp-audio-player-wrp .controller-common,
			.apwp-audio-player-wrp .jp-play-bar,
			.apwp-audio-player-wrp .jp-volume-bar-value,
			.apwp-audio-player-wrp div.jp-type-playlist div.jp-playlist li.jp-playlist-current::before{background-color:#1e73be}
			.apwp-audio-player-wrp div.jp-type-playlist div.jp-playlist a.jp-playlist-current, .apwp-audio-player-wrp div.jp-type-playlist div.jp-playlist a:hover,
			.apwp-audio-player-wrp .jp-state-looped .jp-repeat::before,
			.apwp-audio-player-wrp .playlist-btn.active::before,
			.apwp-audio-player-wrp .jp-state-shuffled .jp-shuffle::before{color:#1e73be}
			.apwp-audio-player-wrp .playlist-block, .apwp-audio-player-wrp .playlist-block-style-two, .apwp-audio-player-wrp .jp-playlist.playlist-block{background:#f7f7f7;}
			div.jp-type-playlist div.jp-playlist a{color:#000000;}
			.apwp-audio-player-wrp .album-art-block .jp-title{color:#ffffff;background-color:rgba(30,115,190,0.33);font-size:22px;}
			.apwp-audio-player-wrp .jp-playlist-item h4{font-size:18px;}
			.jp-video .jp-progress .jp-play-bar:before, .jp-type-single .jp-progress .jp-play-bar:before, .jp-volume-bar-value::before,.apwp-jplayer-design-overide .jp-type-single .jp-details, .apwp-jplayer-design-overide .controller-common, .apwp-jplayer-design-overide .jp-play-bar, .jp-volume-bar-value, .apwp-jplayer-design-overide .jp-state-playing .jp-play{background:#1e73be;}
			.apwp-jplayer-design-overide .jp-state-looped .jp-repeat::before, .apwp-jplayer-design-overide .jp-volume-controls button::before{color:#1e73be;}
           	.jp-details .jp-title {color:#ffffff; font-size:22px;}

           	.masonry-brick{
           		background-color: #121e32;
           		border-radius: 20px;
           	}
           	.see{
           		top:289px;
           		left: 650px;
           		background-color: #3d80efa6 !important;
           	}
@media only screen and (max-width: 699px) {
	.see{
		top:418px;
		left:60px;
	}
#imun-footer{
	margin-top: 500px;
}
.niche{
	position: relative !important;
}
.hero-image {
 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
   min-height: 175px;
    border-radius: 20px;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  padding-bottom: 5%;

}
.hero-text3 {
  text-align: justify;
  position: absolute;
  top: 87%;
  left: 44%;
  transform: translate(-21%, -50%);
  color: white;
  text-align: justify;
  padding-bottom: 5%;

}.hero-text2 button{
padding: 2% 2% 2% 2% !important;
  font-size: 8px;
}

.hero-text2 {
  text-align: center;
  position: absolute;
  top: 75% !important;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;

}.hero-text h2{
	font-size: 18px !important;
}
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
@media screen and (min-width: 700px) {

.hero-image {
 

  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
  position: relative !important;
   min-height: 390px !important;
    border-radius: 20px;


}

.hero-text {
  text-align: center !important;
  position: absolute !important;
  top: 55% !important;
  left: 50% !important;
  transform: translate(-50%, -50%) !important;
  color: white !important;
  padding-bottom: 5% !important;

}
.hero-text3 {
  text-align: justify !important;
  position: absolute !important;
  top: 85% !important;
  left: 40% !important;
  transform: translate(-21%, -50%) !important;
  color: white !important;
  text-align: justify !important;
  padding-bottom: 5% !important;

}

.hero-text2 {
  text-align: center;
  position: absolute;
  top: 72%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;

}.hero-text h2{
	font-size: 30px !important;
}
}.form-control {
    display: block !important;
    width: 100% !important;
    height: 34px !important;
    padding: 6px 12px !important;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    color: #555 !important;
    background-color: #fff !important;
    background-image: none !important;
    border: 1px solid #ccc !important;
    border-radius: 4px !important;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075) !important;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075) !important;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s !important;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
}.nn img{
max-width: 149px;
max-height: 151px;
}
		
</style>

  <link href="1/thumbs2.css" rel="stylesheet" />
    <link href="1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="1/thumbnail-slider.js" type="text/javascript"></script>
    <style>
        body {font: normal 0.9em Arial;color: #222;}
        header {display:block; font-size:1.2em; margin-bottom:100px;}
        header a, header span {
            display: inline-block;
            padding: 4px 8px;
            margin-right: 10px;
            border: 2px solid #000;
            background: #DDD;
            color: #000;
            text-decoration: none;
            text-align: center;
            height: 20px;
        }
        .inner{
        	height: 460px; 

        }
        .inner h6{
        	margin-top: 200px;
        	font-family: News706 BT;
font-size: 18px;
line-height: normal;

color: #15477A;
word-wrap: break-word !important;
white-space: initial !important;
        }.inner p{
        	white-space: initial !important;
        	font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px !important;
line-height: normal;
text-align: justify;

color: #606060;
        }
        header span {background:white;}
        a {color: #1155CC;}

    </style>
		<style type="text/css" id="wp-custom-css">
			.footer-bottom .footer_wrap {padding: 0 0 30px;}
.page-id-2683 .medium-3{width:33% !important}
.page-id-2683 .medium-9{width:67% !important}
.page-id-2683 .rpwd-recent-post__title{font-size:20px !important; line-height:25px !important}
		</style>
		<script async src='stats.wp.com/s-201912.js'></script>
    <script>
      jQuery(document).ready(function($){
         jQuery("#menu-button").click(function(){
            jQuery("#main").toggleClass( "active" );
        });

        jQuery(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 150) {
                $(".scrolling-gear").show();
            } else {
                $(".scrolling-gear").hide(); 
            }
        });

     });

 </script>

	</head>
	<body >
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
			<?php if (isset($stmt[0])) {
						
					 ?>

		<div style=" background: linear-gradient(252.81deg, #FFD18C 0%, #DC8F1A 100%); border: inherit;color: unset; padding: 13px 13px 13px 13px; border-radius: 20px;  width: 25%; text-align: center;display: none;" class=" navbar-fixed-bottom" id="blink1"><b><?php echo $stmt[0]['full_name']; ?>  From  <?php echo $stmt[0]['nationality']; ?><br>  just Registered on IMUN</b></div>
			<div style=" background: linear-gradient(252.81deg, #FFD18C 0%, #DC8F1A 100%); border: inherit;color: unset; padding: 13px 13px 13px 13px; border-radius: 20px;  width: 25%; text-align: center;display: none;" class=" navbar-fixed-bottom" id="blink2"><b><?php echo $stmt[1]['full_name']; ?>  From  <?php echo $stmt[1]['nationality']; ?><br>  just Registered on IMUN</b></div>
				<div style=" background: linear-gradient(252.81deg, #FFD18C 0%, #DC8F1A 100%); border: inherit;color: unset; padding: 13px 13px 13px 13px; border-radius: 20px;  width: 25%; text-align: center;display: none;" class=" navbar-fixed-bottom" id="blink3"><b><?php echo $stmt[2]['full_name']; ?>  From  <?php echo $stmt[2]['nationality']; ?><br>  just Registered on IMUN</b></div>


					<?php
				}

					?>
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
							<li class="active1"><a href="index.php">Home</a></li>
						<li><a href="Aboutus.html">About Us</a></li>
							<li class = "dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Conferences
								</a>
							<ul class="dropdown-menu" style="margin-top: 5px; left:0; color: white; background-color: #0e3660;">
								<li><a href="IMUN_2018.html" style="color: white;">IMUN Thailand 2018</a></li><hr style="margin: 0px 10px 0px 10px">
								<li><a href = "imun_vietnam.html"> IMUN Vietnam 2019</a></li><hr style="margin: 0px 10px 0px 10px">
								<li><a href = "IMUN_2019.html">IMUN Egypt 2019 </a></li>
								
								
							</ul>
						</li>
						
					
					
					
						<li><a href="OnCampus.html">On Campus</a></li>
						<li><a href="Jointeam.html">Join Us</a></li>
						<li><a href="Sponsorus.html">Sponsor Us</a></li>
						<li><a href="blog.html">Blogs</a></li>
						<li><a href="index.php#con">Contact Us</a></li>
			
					</ul>
				</div>
			</div>
		</nav><title>Home</title>


<section id="imun-banner" class="section-banner" >

	<div class="overlay" style="background: linear-gradient(270deg, #ffffff00 10%,#17233785 18%, #172337e3  100%); padding-top: 150px;">
		<div class="container con" >
			<div class = "banner-text" style="margin-left: 5%; ">
				<div class = "row ro">
					<div class = "col-md-2"></div>
					<div class = "col-xs-12 col-sm-12 col-md-12 col-xl-8">
						<div class = "text-left" style="font-family: Montserrat;
font-style: normal;
font-weight: 300;
font-size: 24px;
line-height: normal;

color: #FFFFFF;">INTERNATIONAL<br>MODEL UNITED NATIONS <span style="

font-weight: 600 !important;

line-height: 34px !important;
">2019</span></div> 
						<h1></h1><p class = "text-left" style="  max-width: 565px; font-family: Montserrat;
font-style: normal;
font-weight: 300;
font-size: 16px !important;
line-height: 23px;
text-align: justify;

color: #FFFFFF;">International Model United Nations (IMUN) brings youth together from around the world to learn and share ideas from a diverse set of experiences and backgrounds where the Executive board, International Press and International Delegates consolidate to learn about diplomacy, international relations, and the United Nations.</p>
<!--						<button class = "btn btn-default"><a href = "http://www.internationalmun.org/RegistrationForm.php" style = "">REGISTER NOW</a></button>-->
	<br><br>
					<a  href="RegistrationForm.php" style="color: white; ">	<button class = "btn btn-default" style="float: left; background: linear-gradient(252.81deg, #FFD18C 0%, #DC8F1A 100%); border: inherit;">REGISTER NOW</button></a><button style="float: left; background-color: #00800000; color: white; margin-left: 2%;" class = "btn btn-default" ><a class="my" href="Aboutus.html" style="font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 12px;
line-height: normal;
text-align: center;

color: #FFFFFF;">Know More</a></button>
						<br><br><br><br><br>
						
						<div class = "imun-social" style="float: left;">
							<h6 style="float: left; color: white; margin-bottom: 0px;font-size: 14px;">Catch us at:</h6><br>
								<a href = "https://www.facebook.com/internationalmun2018/" target = "_blank"><img src="images/f.png" height="30" width="30">
									<a href = "https://www.instagram.com/international_mun/" target="_blank" ><img src="images/i.png" height="30" width="30"></a>
									</div>
								
							</div>

					</div>
				
				
			

				</div><!--End Banner Text--> 
			</div>
		</div>
		</section><!--End IMUN-Banner-->


<section id = "imun-sponser" style="background-color: #ffffff; padding-bottom: 100px;margin-top: 5%;" class="">
	<div class="container" id="conf">
		<h2 class = "text-left" id = "heading" style="text-align: left; margin-left: 12%;font-family: Khand !important;
font-style: normal;
font-weight: bold !important;
font-size: 24px;
line-height: normal;
/* khand-700 - latin */
  font-weight: 700;
  src: url('khand/khand-v7-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Khand Bold'), local('Khand-Bold'),
       url('khand/khand-v7-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('khand/khand-v7-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('khand/khand-v7-latin-700.woff') format('woff'), /* Modern Browsers */
       url('khand/khand-v7-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('khand/khand-v7-latin-700.svg#Khand') format('svg'); /* Legacy iOS */

color: #15477A;"> <span style = "color:rgb(21,71,122); ">Conference</span></h2>
		

		</div>
			
</section>

		<div id="main" class=""> 

        
                 

        
                
        

        
                

        
        
                
        
        <div class="content_container">
                    
                        
                        

            
            <div class="content_wrap row" role="document">
                 
	<div id="content" class="medium-12 large-12 columns" role="main">
    
    	
					
	<article id="post-2152" class="post-2152 page type-page status-publish hentry" style="border:none;;">	

		<div class="entry-content">
			
						
					
		
<div class="short-code-title">

		
		<div class="wpsk-carousel-wrap wpsk-row-clearfix">		
			<div id="wpsk-carousel-1" class="swiper-container wpsk-swiper-carousel-wrapper" style="padding-bottom: 50px;">				
				<div class="swiper-wrapper wpsk-swiper-carousel">					
											
						<div class="swiper-slide">							
								<div class="hero-image" style=" background-image: linear-gradient(180.15deg, rgba(18, 30, 50, 0) 28.58%, #121E32 99.52%), url('images/slider/1 (2).png');">
  <div class="hero-text"  style="top: 60% !important;">
    <h2 style="font-family: Montserrat;
font-style: normal;
font-weight: bold;

line-height: normal;
text-align: center;

color: #FFFFFF;">IMUN Vietnam 2019</h2>
    
  </div>
         <div class="hero-text3"><a href="imun_vietnam.html">
    <h1 style="font-family: HelveticaNeue;
font-size: 16px;
line-height: normal;
text-align: center;

color: #FFFFFF;;

color: #FFFFFF; background: linear-gradient(252.81deg, #FFD18C 0%, #DC8F1A 100%); border: inherit; padding: 13px 13px 13px 13px; border-radius: 20px; ">Know More</h1>
    
  </a></div>
 
		</div>			
						</div>
											
						<div class="swiper-slide">							
								<div class="hero-image" style=" background-image: linear-gradient(180.15deg, rgba(18, 30, 50, 0) 28.58%, #121E32 99.52%), url('images/slider/1 (3).png');">
  <div class="hero-text" style="top: 60% !important;">
 <h2 style="font-family: Montserrat;
font-style: normal;
font-weight: bold;

line-height: normal;
text-align: center;

color: #FFFFFF;">IMUN Egypt 2019</h2></a>
    
  </div>

   <div class="hero-text3">   <a href="IMUN_2019.html"> 
    <h1 style="font-family: HelveticaNeue;
font-size: 16px;
line-height: normal;
text-align: center;

color: #FFFFFF;;

color: #FFFFFF; background: linear-gradient(252.81deg, #FFD18C 0%, #DC8F1A 100%); border: inherit; padding: 13px 13px 13px 13px; border-radius: 20px; ">Know More</h1>
    
  </div></a>
 		</div>					
						</div>
											
						<div class="swiper-slide">							
							<div class="hero-image" style=" background-image: linear-gradient(180.15deg, rgba(18, 30, 50, 0) 28.58%, #121E32 99.52%), url('images/slider/1 (1).png');">
  <div class="hero-text" style="top: 60% !important;">
   <h2 style="font-family: Montserrat;
font-style: normal;
font-weight: bold;

line-height: normal;
text-align: center;

color: #FFFFFF;">IMUN Thailand 2018</h2>
    
  </div>
     <div class="hero-text3">   <a href="IMUN_2018.html"> 
    <h1 style="font-family: HelveticaNeue;
font-size: 16px;
line-height: normal;
text-align: center;

color: #FFFFFF;;

color: #FFFFFF; background: linear-gradient(252.81deg, #FFD18C 0%, #DC8F1A 100%); border: inherit; padding: 13px 13px 13px 13px; border-radius: 20px; ">Know More</h1>
    
  </div></a>
 		</div>	
 
 		</div>					
						</div>
											
						
									</div>				
				<div class="wpsk-carousel-conf">{"slide_to_show":"2","slide_to_column":"1","pagination":"true","pagination_type":"bullets","speed":"500","autoplay":"true","autoplay_speed":"3000","auto_stop":"false","space_between":"0","centermode":"true","loop":"true","depth":"15","modifier":"30"}</div><!-- end of-slider-conf -->
				
								
				
		        <!-- Add Arrows -->
		        			    
			       
			    			</div><!-- end .msacwl-carousel -->
			    			 <div class="swiper-button-next"></div>
			        <div class="swiper-button-prev"></div>
		</div><!-- end .msacwl-carousel-wrap -->
	
</div>

</div>		</article>			</div><!-- .entry-content -->	
		

			
		
	</div><!-- #content -->

	</div><!-- end .content-wrap -->

    </div><!-- end .content_container -->
<h2 style="font-family: Montserrat;
font-style: normal;
font-weight: 600;
font-size: 22px;
line-height: normal;
text-align: center;

color: #15477A;">SPONSORS<br><br><br><a href="https://dfat.gov.au" target = "_blank"><img src="images/Partners/Aus_Embassy_logo.jpg" style="max-width: 142px; max-height: 101px;"></a></h2><p style="font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 12px;
line-height: normal;
text-align: center;
color: #15477A;">Autralian Embassy, Bangkok and Vietnam</p>
<section>
	<div class="container ">
		<h2 class = "text-left" id = "heading" style="text-align: left; margin-left: 12%;font-family: Khand !important;
font-style: normal;
font-weight: bold !important;
font-size: 24px;
line-height: normal;
/* khand-700 - latin */
  font-weight: 700;
  src: url('khand/khand-v7-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Khand Bold'), local('Khand-Bold'),
       url('khand/khand-v7-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('khand/khand-v7-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('khand/khand-v7-latin-700.woff') format('woff'), /* Modern Browsers */
       url('khand/khand-v7-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('khand/khand-v7-latin-700.svg#Khand') format('svg'); /* Legacy iOS */

color: #15477A;"> UN Partner Organisations</h2>
		

		</div>
		<div class = "container con" >
		<div class = "row patner2" id = "row-content">
		
			<div style="text-align: center;"  class="row">
				
				<div class="col-xs-4 col-sm-3 col-md-4 partner oo">
					<div  style=" width:100px;  box-shadow: 0px 0px 20px -8px rgba(0,0,0,0.75);">
						<a href = "https://www.undp.org/content/undp/en/home.html" target = "_blank"><img src="images/conf/logo (2).png" style="padding:10px 10px 10px 10px; height:100px; "></a>
					</div>
					<h5 class="patner_name"><b>UNDP</b></h5>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-4 partner">
					<div  style=" width:100px;  box-shadow: 0px 0px 20px -8px rgba(0,0,0,0.75); text-align: center;">
						<a href = "https://en.unesco.org/" target = "_blank"><img src="images/conf/logo (3).png" style="padding:10px 10px 10px 10px; height:100px; "></a>
					</div>
					<h5 class="patner_name"><b>UNESCO</b></h5>
				</div>


				
			
				
                 <div class="col-xs-4 col-sm-3 col-md-4 partner">
					<div  style=" width:100px;  box-shadow: 0px 0px 20px -8px rgba(0,0,0,0.75);">
						<a href = "https://thailand.iom.int/" target = "_blank"><img src="images/Partners/new.png" style="padding:15px 15px 15px 15px; height:100px; "></a>
					</div>
					<h5 class="patner_name"><b> IOM</b></h5>
				</div>

			
				
			</div>
		</div>
	</div>
				


</section>
<section style="position: absolute;right:0%;left:0%;">
	<img src="images/icon/b.png" style="width:100%;">
</section>
<section style="z-index: 2;">
	<div class="container">
		<h2 class = "text-left" id = "heading" style="text-align: left; margin-left: 12%;font-family: Khand !important;
font-style: normal;
font-weight: bold !important;
font-size: 24px;
line-height: normal;
/* khand-700 - latin */
  font-weight: 700;
  src: url('khand/khand-v7-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Khand Bold'), local('Khand-Bold'),
       url('khand/khand-v7-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('khand/khand-v7-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('khand/khand-v7-latin-700.woff') format('woff'), /* Modern Browsers */
       url('khand/khand-v7-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('khand/khand-v7-latin-700.svg#Khand') format('svg'); /* Legacy iOS */

color: #15477A; ">Have a glance</span></h2>
			<div class = "row" id = "row-content" style="padding-top: 70px !important;">
			<div class = "col-md-5">
				
			</div>
						

		</div>

	</div>
</section>


<section style="z-index: 2">
	 <div class="container" style="position: relative;">
            <div class="row">
			<div class="main">
				<div class="gamma-container gamma-loading" id="gamma-container" style="text-align: center;">
					<ul class="gamma-gallery">
						<li>
							<div data-alt="img03" data-description="" data-max-width="1800" data-max-height="1350">
								<div data-src="images/gal/1 (2).png" data-min-width="1300"></div>
								<div data-src="images/gal/1 (2).png" data-min-width="1000"></div>
								<div data-src="images/gal/1 (2).png" data-min-width="700"></div>
								<div data-src="images/gal/1 (2).png" data-min-width="300"></div>
								<div data-src="images/gal/1 (2).png" data-min-width="200"></div>
								<div data-src="images/gal/1 (2).png" data-min-width="140"></div>
								<div data-src="images/gal/1 (2).png"></div>
								<noscript>
									<img src="images/gal/1 (2).png" alt="img03"/>
								</noscript>
							</div>
						</li>

						<li class="nn">
							<div data-alt="img03" data-description="" data-max-width="1800" data-max-height="1350">
								<div data-src="images/about/1 (3).png" data-min-width="1300"></div>
								<div data-src="images/about/1 (3).png" data-min-width="1000"></div>
								<div data-src="images/about/1 (3).png" data-min-width="700"></div>
								<div data-src="images/about/1 (3).png" data-min-width="300"></div>
								<div data-src="images/about/1 (3).png" data-min-width="200"></div>
								<div data-src="images/about/1 (3).png" data-min-width="140"></div>
								<div data-src="images/about/1 (3).png"></div>
								<noscript>
									<img src="images/about/1 (3).png" alt="img03"/>
								</noscript>
							</div>
						</li>
					
						<li class="three nn" >
							<div data-alt="img03" data-description="" data-max-width="1800" data-max-height="1350">
								<div data-src="images/about/1 (1).png" data-min-width="1300" ></div>
								<div data-src="images/about/1 (1).png" data-min-width="1000"></div>
								<div data-src="images/about/1 (1).png" data-min-width="700"></div>
								<div data-src="images/about/1 (1).png" data-min-width="300"></div>
								<div data-src="images/about/1 (1).png" data-min-width="200"></div>
								<div data-src="images/about/1 (1).png" data-min-width="140"></div>
								<div data-src="images/about/1 (1).png"></div>
								<noscript>
									<img src="images/about/1 (1).png" alt="img03"/>
								</noscript>
							</div>
						</li>
					
						<li class="four">
							<div data-alt="img03" data-description="" data-max-width="1800" data-max-height="1350">
								<div data-src="images/gal/1 (6).png" data-min-width="1300"></div>
								<div data-src="images/gal/1 (6).png" data-min-width="1000"></div>
								<div data-src="images/gal/1 (6).png" data-min-width="700"></div>
								<div data-src="images/gal/1 (6).png" data-min-width="300"></div>
								<div data-src="images/gal/1 (6).png" data-min-width="200"></div>
								<div data-src="images/gal/1 (6).png" data-min-width="140"></div>
								<div data-src="images/gal/1 (6).png"></div>
								<noscript>
									<img src="images/gal/1 (6).png" alt="img03"/>
								</noscript>
							</div>

						</li>
						
						<li >
							<div data-alt="img03"  data-max-width="1800" data-max-height="1350">
								<div data-src="images/gal/1 (1).png" data-min-width="1300"></div>
								<div data-src="images/gal/1 (1).png" data-min-width="1000"></div>
								<div data-src="images/gal/1 (1).png" data-min-width="700"></div>
								<div data-src="images/gal/1 (1).png" data-min-width="300"></div>
								<div data-src="images/gal/1 (1).png" data-min-width="200"></div>
								<div data-src="images/gal/1 (1).png" data-min-width="140"></div>
								<div data-src="images/gal/1 (1).png"></div>
								<noscript>
									<img src="images/gal/1 (1).png" alt="img03"/>
								</noscript>
							</div>
						</li>
							<li  class="five">
							<div data-alt="img03" data-description="" data-max-width="1800" data-max-height="1350">
								<div data-src="images/gal/1 (5).png" data-min-width="1300"></div>
								<div data-src="images/gal/1 (5).png" data-min-width="1000"></div>
								<div data-src="images/gal/1 (5).png" data-min-width="700"></div>
								<div data-src="images/gal/1 (5).png" data-min-width="300"></div>
								<div data-src="images/gal/1 (5).png" data-min-width="200"></div>
								<div data-src="images/gal/1 (5).png" data-min-width="140"></div>
								<div data-src="images/gal/1 (5).png"></div>
								<noscript>
									<img src="images/gal/1 (5).png" alt="img03"/>
								</noscript>
							</div>
						</li>
					</ul>
					<a href="https://www.facebook.com/pg/internationalmun2018/photos/?ref=page_internal" target = "_blank"><button style="position: absolute; border-radius: 20px;" class="see">See More</button>	</a>
				</div>
			</div>
		</div>
</div>
</section>
<section style="margin-bottom: -250px; color:white;" class="sli">
	<div class="">
		<h2 class = "text-left" id = "heading" style="text-align: left; margin-left: 12%;font-family: Khand !important;
font-style: normal;
font-weight: bold !important;
font-size: 24px;
line-height: normal;
/* khand-700 - latin */
  font-weight: 700;
  src: url('khand/khand-v7-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Khand Bold'), local('Khand-Bold'),
       url('khand/khand-v7-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('khand/khand-v7-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('khand/khand-v7-latin-700.woff') format('woff'), /* Modern Browsers */
       url('khand/khand-v7-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('khand/khand-v7-latin-700.svg#Khand') format('svg'); /* Legacy iOS */

color: #15477A; ">In The NEWS</span></h2>
			<div class = "row" id = "row-content" style="padding-top: 70px !important;">
			<div class = "col-md-5">
				
			</div>
						

		</div>

	</div>
        
	<div class="">
            <div id="thumbnail-slider" style="background-color: unset; box-shadow: unset;">
                <div class="inner">
                    <ul>
                        <li>
                        <li style="min-height: 190px; min-width: 289px; text-align: left;">
                            <a class="thumb" href="images/news.png"></a>
                            <h6> Reflections: How MUN Has Changed Our Lives</h6><p>
                            	Model UN is a fast-growing competitive activity for many students, but to a great deal of us, it means something more. Model UN has helped us grow into leaders, discover our futures, become confident in ourselves, and form lasting friendships with people from all over the world. This article was written by you, the Best Delegate community, and it shows stories about how MUN has made us the people.
                            </p>

                        </li>

                    </li>
                         <li style="min-height: 190px; min-width: 289px;">
                            <a class="thumb" href="images/news.png"></a>
                             <a class="thumb" href="images/news.png"></a>
                            <h6> Reflections: How MUN Has Changed Our Lives</h6><p>
                            	Model UN is a fast-growing competitive activity for many students, but to a great deal of us, it means something more. Model UN has helped us grow into leaders, discover our futures, become confident in ourselves, and form lasting friendships with people from all over the world. This article was written by you, the Best Delegate community, and it shows stories about how MUN has made us the people.
                            </p>
                        </li>
                         <li style="min-height: 190px; min-width: 289px;">
                            <a class="thumb" href="images/news.png"></a>
                             <a class="thumb" href="images/news.png"></a>
                            <h6> Reflections: How MUN Has Changed Our Lives</h6><p>
                            	Model UN is a fast-growing competitive activity for many students, but to a great deal of us, it means something more. Model UN has helped us grow into leaders, discover our futures, become confident in ourselves, and form lasting friendships with people from all over the world. This article was written by you, the Best Delegate community, and it shows stories about how MUN has made us the people.
                            </p>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
</section>

<section id="testi">
	


  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 0%; padding-top: 20%;">
  	<h2  style="text-align: left;margin-left: 12%;margin-bottom: 30px;"><b> <span style = "font-family: Khand;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: normal;

color: #15477A;
">What people have to say about us!</span></b></h2>
    <!-- Indicators -->
 

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class = "item active">
		

		<div class = "col-md-2 col-xs-0" style="">
						
					</div>

<div class = "col-md-5" style="background: linear-gradient(38.35deg, #226AB4 0%, #4087DA 100%);color: white;border-radius: 20px;  ">
							<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							
							I’m so happy to have met all the members of IMUN 2018. Who would have known that from this conference I met my new family!
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2"  style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Nadya.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131); margin-left: 15% ;"><b>Nadya Andra Martinez</b></h5><h6 style="text-align: center;"><em >Indonesia</em></h6>
				</div>


	</div>

     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
						<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							Another blessing happened to me this year. I hope from here I can reach greater heights in the future!
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2"  style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Adellyn.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131); "><b>Adellyn Dwitara</b></h5><h6 style="text-align: center;"><em >Indonesia</em></h6>
				</div>


	</div>
     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
							<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							This is my first Model United Nations conference where I have gained a lot of new experience and have met people who are smart, kind and hardworking. Most importantly, it made me want to improve myself more!
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2" style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/sand.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131);"><b>Sand Siwapron</b></h5><h6 style="text-align: center;"><em >Thailand</em></h6>
				</div>


	</div>

	     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
						<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
				
							It’s my first MUN experience! Never too late to take the first step!
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2"  style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Vineeth.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131); "><b>Vineeth Dasari</b></h5><h6 style="text-align: center;"><em >India</em></h6>
				</div>


	</div>
     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
							<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							
							The best experience I’ve ever had. Thank you IMUN 2018 for giving me the chance to join the event and winning the ‘Best Position Paper’ award!
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2" style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Popy.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131);"><b>Popy Puspitasari</b></h5><h6 style="text-align: center;"><em >Indonesia</em></h6>
				</div>


	</div>

	     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
						<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							
							An open door for a bigger room.
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2"  style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Shekina.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131); "><b>Shekinah Castro</b></h5><h6 style="text-align: center;"><em >Phillipines</em></h6>
				</div>


	</div>
     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
							<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							
							This experience has been a worthwhile one and I’m most appreciative of the new friendship that have been formed.
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2" style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Jelani.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131);"><b>Jelani Reid</b></h5><h6 style="text-align: center;"><em >Trinidad and Tobago</em></h6>
				</div>


	</div>

	     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
						<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							
							The greatest gift that this journey in IMUN 2018 has brought me was the creation of lifelong friendships with different people from all over the world. 
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2"  style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Precious.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
				<h5 style="color:rgb(22, 70, 131);"><b>Precious Bugayong</b></h5><h6 style="text-align: center;"><em >Phillipines</em></h6>
				</div>


	</div>
     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
							<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							
							I thought I wouldn’t be able to make it, but here I am, receiving the ‘Best Position Paper’ award.
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2" style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Trisha.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131);"><b>Trisha De la Torre</b></h5><h6 style="text-align: center;"><em >Phillipines</em></h6>
				</div>


	</div>

	     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
						<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							
							Meeting people from around the world with the same passion and eagerness as yours is perhaps one of the best experiences you could possibly indulge in.
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2"  style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Arem.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131); "><b>Arem Badajo</b></h5><h6 style="text-align: center;"><em >Phillipines</em></h6>
				</div>


	</div>
     <div class = "item">
		

		<div class = "col-md-2" style="">
						
					</div>

<div class = "col-md-5" style="background-color: #347ccc;color: white;border-radius: 20px; ">
							<img src="images/v.png" style="max-height: 30px ; max-width: 25px; margin-top: 3%;">
						<p style="padding: 10px 30px 30px 30px; text-align: justify; font-family: Montserrat;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 18px;
text-align: justify;

color: #FFFFFF;
margin-left: 30px;
margin-right: 30px;">
							
							It was really a wonderful experience for me to participate in IMUN 2018!
						
						</p>
					</div>
					<div class="col-xs-3 col-sm-1 col-md-1"  style="text-align: center;">
					
				</div>
					<div class="col-xs-6 col-sm-3 col-md-2" style="text-align: center;">
					<div  style="  height: 120px; width: 120px; margin-left: 15%;">
						<a href = "#" target = "_blank"><img src="images/testimonials/Arun.jpg" style="padding:15px 15px 15px 15px;height: 120px; width: 120px; border-radius: 90px;"></a>
					</div>
					<h5 style="color:rgb(22, 70, 131);"><b>Arun Chad Palakkattiri</b></h5><h6 style="text-align: center;"><em >India</em></h6>
				</div>


	</div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="
  filter: progid: none !important;
  filter:none !important;
  background-image:none;
  outline: 0;
  opacity: 1;">
      <span class="glyphicon glyphicon-chevron-left" style="color: #347ccc; padding-top: 110px;" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"  style="
  filter: progid: none !important;
  filter:none !important;
  background-image:none;
  outline: 0;
  opacity: 1;">
      <span class="glyphicon glyphicon-chevron-right" style="color: #347ccc; padding-top: 110px;"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</section>








		<section style="padding-bottom: 2%; background-color: white;" id="con">
	<div class="container con" style="height: 400px;">
		<div class="row" id="row-content">
		<h2 style="text-align: left;margin-left: 7%;"><b> <span style="font-family: Khand;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: normal;

color: #15477A;">Get in Touch</span></b></h2>
		<div class="col-md-6">
			<table style="border:unset;">
				<tbody><tr><td style="padding-top: 20px;">
			<img src="images/icon/1 (1).png" style="height: 40px; max-width: initial; "></td><td style="padding-left:20px;padding-top: 20px; ">Phone<br><a href="" style="color: #15477e">(+91) 999 741 5973</a></td></tr><tr style="background:unset;"><td style="padding-top: 20px;">
			<img src="images/icon/1 (2).png" style="height: 30px; margin-left: 7%;  max-width: initial;"></td><td style="padding-left:20px; padding-top: 20px;">Email<br><a href="" style="color: #15477e">info@internationalmun.org</a></td></tr><tr><td style="padding-top: 20px;">
			<img src="images/icon/1 (3).png" style="height: 40px; max-width: initial; "></td><td style="padding-left:20px;padding-top: 20px; ">Address<br><a href+="" style="color: #15477e">E-73 Sector 50, Gautam Budh Nagar, Noida, India - 201 304</a></td></tr>
			
			</tbody></table>
		</div>
		<div class="col-md-6" style="border-radius: 20px !important;box-shadow: 0px 0px 20px -8px rgba(0,0,0,0.75) !important; max-width: 350px !important; position: relative !important; z-index: 10 !important; background-color:white !important;bottom: 16px;">
			<div id="frmContact" style="width: 300px !important;margin-left: 3% !important;">
				<h4 style="text-align: left;margin-left: 2% !important; padding-top: 4%!important ;"><b> <span style="font-family: Montserrat;
font-style: normal;
font-weight: 500;

line-height: normal;
text-align: center;

color: #15477A;">Say Something</span></b></h4>
   <form id="contact-form" method="post" action="#" class="validate">
							<p id="mail-status"></p>
							<div style="padding: 0px 10px 0px 10px !important ; max-height: 60px;">
								<label class="field" style="transform: translate(14px,25px) !important;
    background-color: white !important;
    color: rgb(21,71,122) !important;
    width: 80px;
    padding-left: 10px; ">Full name </label><span id="userName-info" class="info"></span><br>
								<input type="text" name="userName" id="contact-name" class="form-control" style="border: 1px solid rgb(21,71,122) !important;" required>
							</div>
							<div style="padding: 0px 10px 0px 10px; max-height: 60px;">
								<label class="field" style="transform: translate(14px,25px) !important;
    background-color: white !important;
    color: rgb(21,71,122) !important;
    width: 80px;
    padding-left: 10px;  ">Email Id</label><span id="userEmail-info" class="info"></span><br>
								<input type="email" name="userEmail" id="contact-email" class="form-control" style="border: 1px solid rgb(21,71,122) !important;" required>
							</div>
								<div style="padding: 0px 10px 0px 10px ; max-height: 60px"    >
								<label class="field" style="transform: translate(14px,25px) !important;
    background-color: white !important;
    color: rgb(21,71,122) !important;
    width: 80px;
    padding-left: 10px;  ">Subject</label><span id="userEmail-info" class="info"></span><br>
								<input type="text" name="userSub" id="contact-sub" class="form-control" style="border: 1px solid rgb(21,71,122) !important;" required>
							</div>
							
							<div style="padding: 0px 10px 0px 10px;">
								<label class="field" style="transform: translate(14px,25px) !important;
    background-color: white !important;
    color: rgb(21,71,122) !important;
    width: 100px;
    padding-left: 10px; ">Your Message</label><span id="content-info" class="info"></span><br>
								<textarea name="content" id="contact-message" class="form-control" rows="3" style="margin: 0px -7px 0px 0px; width: 280px; min-height: 100px; border: 1px solid rgb(21,71,122)  !important;" required></textarea>
							</div>
					
							<br>
							<div style="padding: 0px 10px 20px 10px">
								<a class="btnAction btn btn-primary" style="width: 280px; background-color:rgb(21,71,122) !important; " id="con_sub">Send</a>
							</div>
								</form>
						</div>
		</div>
	</div>
</div>
	

</section>


<section id="imun-footer" style="background-color:#0E3660 ;">

			<div class="container con">
				<div class="row">
					<div class="col-md-4 niche" style="position: absolute;">
						<h4><b style="font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: normal;

color: #FFFFFF;">About Us</b></h4><br>
						<p style="font-family: Montserrat;
font-style: normal;
font-weight: 300;
font-size: 12px !important;
line-height: 18px;
text-align: justify;

color: #FFFFFF;">International Model United Nations (IMUN) brings students together from around the world to learn and share ideas from a diverse set of experiences and backgrounds where the Executive board, International Press and International Delegates consolidate to learn about diplomacy, international relations, and the United Nations.</p>
						<div class="imun-social" style="float: left;">
							Catch us<br>
								
									<a href="https://www.facebook.com/internationalmun2018/" target="_blank"><img src="images/ff.png" style="max-width: 18px ; max-height: 18px;"></a>     <a href="https://www.instagram.com/international_mun/" target="_blank"><img src="images/ii.png" style="margin-left: 2px; max-height: 18px; max-width:  18px;"></a>
									</div>
					</div>
					<div class="col-md-2">
						
					</div>
					
				</div><div style="margin-top: 2%;">
					<form id="subscribe-form" method="POST" action="#">
                        <input type="email" name="subscribe-email" id="subscribe-email" style="width: 35%; border-radius: 20px; border-color: blue;" placeholder="ENTER EMAIL ID TO SUBSCRIBE">
                        <a  id="subscribe-submit" class = "btn btn-default" style="float: left; background: linear-gradient(252.81deg, #FFD18C 0%, #DC8F1A 100%); border: inherit; border-radius: 20px; color: white;"  >SUBSCRIBE US</a>
                    </form></div>
				<br>
				<div class="row centr" style="max-width: 980px;text-align: left;margin-left: 7%;padding-top: 5%;">
					<div class="col-md-1">
						
					</div>
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
						<a href="blog.html" style="color: white;">Blogs</a>
					</div>
					
				</div>
			
				<h4 style="text-align: center;  padding-top: 5%; padding-bottom: 5%;">Copyright © 2018-2019, International Model United Nations </h4>
				<h4 class="pull-right"></h4>
			</div>
		</section>
		


<script type="text/javascript" src="code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>




	



// 		var interval = 1000000;
// var stopBlinking = false;

// function blink(selector) {
//     if(stopBlinking)
//         return false;
	
//     $(selector).fadeOut(3000, function() {
//         $(this).fadeIn(3000, function() {
//             blink(this);
//         });
//     });
// }

// blink("#blink");

// setInterval(function(){ 
//     stopBlinking = !stopBlinking; 
//     blink("#blink");
// }, interval);




	var count=1;
	setInterval(function(){
setTimeout(function(){ 
	
    var div = $("#blink1");  
    $("#blink1").css('display','block');
    div.animate({left: '200px'}, 5000);
    div.animate({left: '-400px'}, 5000);

   
  }, 1000);
},1000);

</script> 
<script>

		$("#testimonial-slider").owlCarousel({
			items:3,
			itemsDesktop:[1000,3],
			itemsDesktopSmall:[979,2],
			itemsTablet:[768,1],
			pagination:false,
			navigation:true,
			navigationText:["",""],
			autoPlay:true
		});
		$("#partners-slider").owlCarousel({
			items:5,
			itemsDesktop:[1000,5],
			itemsDesktopSmall:[979,3],
			itemsTablet:[768,3],
			pagination:false,
			navigation:true,
			navigationText:["",""],
			autoPlay:true
		});




</script>
	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="js/jquery.masonry.min.js"></script>
		<script src="js/jquery.history.js"></script>
		<script src="js/js-url.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/gamma.js"></script>
		<script type="text/javascript">
//            Rahul's code


function subscribeSubmit(){

	  let email = $('#subscribe-email').val();
            $.ajax({
                url : '../private/API/newsletter.php',
                type: 'POST',
                data: 'req=add&email='+email,
                success: function(data){

                    if(JSON.parse(data)["status"]=='SUCCESS'){
               $("#subscribe-submit").html("Subscribed");
                    }else{
                    	  $("#subscribe-submit").html("Subscribed");
                    	
                    }
                }
            });

}
        $('#subscribe-submit').on("click", function(){

        	console.log("hi");
		subscribeSubmit();
          
        });






function contactSubmit(){

	  let name = $('#contact-name').val();
	  let email = $('#contact-email').val();
	  let subject = $('#contact-sub').val();
	  let message = $('#contact-message').val();
if(name!="" && email !="" && subject!="" && message !=""){
	 $("#con_sub").html("Sent");
	  $("#con_sub").css("background-color","#959595");
            $.ajax({
                url : '../private/API/contact.php',
                type: 'POST',
                data: 'req=addCon&email='+email+'&name='+name+'&subject='+subject+'&message='+message,
                success: function(data){
                	console.log("hi");
              
                }
            });
}
}

        $('#con_sub').on("click", function(){

        	console.log("hi");
		contactSubmit();
          
        });
			




































			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {
							
							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>	
<script>

</script>

	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	
	<script type="text/javascript">
		window.WPCOM_sharing_counts = {"http:\/\/demo.wponlinesupport.com\/stack-slider-3d-image-slider-demo\/":2152};
	</script>
						
<script type='text/javascript'>
/* <![CDATA[ */
var edd_scripts = {"ajaxurl":"http:\/\/demo.wponlinesupport.com\/wp-admin\/admin-ajax.php","position_in_cart":"","has_purchase_links":"","already_in_cart_message":"You have already added this item to your cart","empty_cart_message":"Your cart is empty","loading":"Loading","select_option":"Please select an option","is_checkout":"0","default_gateway":"manual","redirect_to_checkout":"0","checkout_page":"http:\/\/demo.wponlinesupport.com\/checkout-2\/","permalinks":"1","quantities_enabled":"","taxes_enabled":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/easy-digital-downloads/assets/js/edd-ajax.min562c.js?ver=2.9.11'></script>
<script type='text/javascript' src='wp-content/plugins/html5-videogallery-plus-player/assets/js/video95b8.js?ver=2.3.2'></script>
<script type='text/javascript' src='s0.wp.com/wp-content/js/devicepx-jetpack5471.js?ver=201912'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ssbywpos = {"is_mobile":"0","is_rtl":"0","enable_mousewheelsmooth_scroll":"","ssbywpos_scroll_amount":"300","ssbywpos_scroll_speed":"800","enable_gototop_scroll":"","ssbywpos_gototop_speed":"700"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/smooth-scroll-by-wpos/assets/js/wp-ssbywpos-public5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.wponlinesupport.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min10cb.js?ver=3.5.6'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min10cb.js?ver=3.5.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_0ba27cbd6a29778cffef68930363579a","fragment_name":"wc_fragments_0ba27cbd6a29778cffef68930363579a"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min10cb.js?ver=3.5.6'></script>
<script type='text/javascript'>
		jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
			jQuery( 'body' ).trigger( 'jetpack-lazy-images-load' );
		} );
	
</script>
<script type='text/javascript' src='wp-content/plugins/product-categories-designs-for-woocommerce/assets/js/publicc358.js?ver=1.1.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var Wmpci_Popup = {"enable":"1","delay":"2","exp_time":"1","close_on_esc":"1","hide_time":"20"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/wp-modal-popup-with-cookie-integration/assets/js/wmpci-popup9632.js?ver=1.2.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var Wtpsw = {"ajaxurl":"http:\/\/demo.wponlinesupport.com\/wp-admin\/admin-ajax.php","is_mobile":"0","is_rtl":"0","post_view_count":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/wp-trending-post-slider-and-widget/assets/js/wtpsw-publice7f0.js?ver=1.3.1'></script>
<script type='text/javascript' src='wp-content/themes/wponlinesupport-plugins/js/load-foundation4245.js?ver=5.5.2'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min3c21.js?ver=5.1.1'></script>
<script type='text/javascript' src='wp-content/plugins/app-mockups-carousel/assets/js/swiper.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/plugins/stack-slider-3d-image-slider/assets/js/wp-sk-public4e44.js?ver=1.3'></script>
<script type='text/javascript'>

</script>

</body>


</html>