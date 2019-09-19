<?php
session_start();
include("inc/config.php");
?>
<html>
	<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css"
      media="screen">
		<title><?php
include('inc/title.php');
	?>


		<link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>	
	
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="responsiveslides.min.js"></script>
  <script>
    $(function () {

      $(".rslides").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "centered-btns"
      });

    });
  </script>

	</head>
	<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="like-box">
	<div class="outside">
		<div class="inside">
			<div class="fb-like-box" data-href="https://www.facebook.com/csgoszop/" data-width="330" data-height="590" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
		</div>
	</div>
	<div class="belt">facebook</div>
</div>

		<div class="wszystko">	
	
		

			
			
			
			
		</div>
	
	<div class="top">
		<div class="wszystko">	
		
		
			<div class="logo">
			<a href="index.php"><img src="img/logo2.png" alt="skiny cs go za sms"></a>
			</div>
		
			
			<div class="part">

				
				
			<div class="menu">
			
		<?php
		include('inc/menu.php');
		?>
				
			</div>	


				
			</div>
		
		
		</div>		
	</div>
			
			
			

		<br>
		<br>
		<br>
		<br>
		<div class="wszystko3">
		<br>
		<br>
    <div class="rslides_container">
      <ul class="rslides">
        <li><img src="4s.jpg" alt="skiny cs go za sms"></li>
        <li><img src="2s.jpg" alt="skiny cs go za sms"></li>
        <li><a href="https://www.facebook.com/csgoszop"><img src="3s.jpg" alt="skiny cs go za sms"></a></li>
      </ul>
    </div>
</div>
		<br>
		<br>
		<br>
		
<div class="kategorie">
					<div id="zamowienia-container">
					<center><a href="http://csgo-shop.pl/?page=zamowienia"> NOWOŚĆ ! ZAMÓW SKIN SPOZA OFERTY NASZEJ STRONY ! </a></center>
					</div>
					</div>
					<br>

				<div class="kategorie">
		<div id="sorting-container">
                    <a href="#" title="" class="active-sort" data-filter=".all-sort"> Wszystkie </a>                                     
                    <a href="#" title="" data-filter=".bronie"> Bronie </a>
					<a href="#" title="" data-filter=".stat"> StatTrak™ </a>
                    <a href="#" title="" data-filter=".skrzynki"> LOSY </a>
                    <a href="#" title="" data-filter=".klucze"> Klucze </a>
					<a href="#" title="" data-filter=".nakl"> Naklejki </a>
                    <a href="#" title="" data-filter=".inne"> Inne </a>
                </div>
		</div>
		<br>
		<br>
		<br>
			

		<div class="wszystko2">
			
			


			
<?php
$body = $_GET["page"];
if ($body=="")
       {
       include("strony/home.php");
       } else {
if (is_file("strony/$body.php"))
		{
          include("strony/$body.php");
        } else {
            include("strony/404.php");
		}	
        }                           
?>			
			
			
				


			<!-- </div>  -->

			
			<div class="koniecwszystko">
				&nbsp;
			</div>	

			
		</div>
		

		
		<div class="stopka">
			<div class="stopkatekst">
<?php	
	$result = mysql_query("SELECT * FROM settings WHERE id = '1'");
		($row = mysql_fetch_object($result));
		$nazwa = "$row->nazwastrony";
		
echo '		
			Copyright © 2015 by '.$nazwa.'<br>
			Desing: Inferno<br>
			Facebook: <a href="https://www.facebook.com/csgoszop">CSGO-SHOP.PL FACEBOOK</a><br>
			<h1>Skiny za SMS CS:GO,
			
			 Sklep SMS Skiny CS:GO,
			
			 SMS Shop CS GO</h1>'
			; 

?>			

			
			<div>
		</div>











<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery.js"></script>

<script src="js/jquery.easing.1.2.js"></script>
<script src="js/jquery.visualNav.js"></script>    

<script src="js/isotope.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.gmap.min.js"></script>

<script src="js/jquery.mobilemenu.js"></script>
<script src="js/core-custom.js"> </script>    

<link rel="stylesheet" href="css/prettyPhoto.css" media="screen" />
<script src="js/jquery.prettyPhoto.js"></script>
<script>
    jQuery(document).ready(function($){			
        $(".gallery a[data-gal^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,social_tools: false});				
    });
</script>

<script src="js/jquery.carouFredSel-6.2.0-packed.js"></script>

<script>

function scrollTo(target){
  var myArray = target.split('#');
  var targetPosition = jQuery('#' + myArray[1]).offset().top;
  jQuery('html,body').animate({ scrollTop: targetPosition}, 'slow');
}
		
jQuery(document).ready(function($) {
	$('#testimonial-carousel').carouFredSel({
		responsive: true,
		auto: false,
		width: '100%',
		prev: '#prev',
		next: '#next',
		height: 'auto',
		scroll: 1,				
		items: {
			width: 460,
			visible: {
					min: 1,
					max: 2
				}
		}				
	});			
	$('#blog-carousel').carouFredSel({
		responsive: true,
		auto: false,
		width: '100%',
		prev: '#prev2',
		next: '#next2',
		height: 'auto',
		pagination: "#pager",
		scroll: 1,				
		items: {
			width: 460,
			visible: {
					min: 1,
					max: 2
				}
		}				
	});
});
</script>













		
		
	</body>
</html>