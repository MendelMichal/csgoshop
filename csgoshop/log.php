<!doctype html>
<?php;
session_start();
include("inc/config.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		
		<title><?php
include('inc/title.php');
	?></title>
	
		<link href="style.css" rel="stylesheet" type="text/css" />
		    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>	
		
	

	
	
	</head>
	<body>
	
	
		<!-- MENU GÓRNE -->
		<div class="wszystko">	
	
		

			
			
			
			
		</div>
	
		<!-- LOGO -->
	<div class="top">
		<div class="wszystko">	
		
		
			<div class="logo">
			<a href="index.php"><img src="img/logo.png"></a>
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
			
			
			
		<!-- CAŁA STRONA -->
		<div class="wszystko2">
		




			
		<!-- SRODEK - MENU -->
			<div class="menulewe">


				<div id="nazwaboxat">
				<a href="">Panel</a>
				</div>

				
				<div class="menu-ng2">
					<div class="ust-tekst2">
<?php
if(isset($_SESSION['login'])) {

include('inc/user.php');

} else { 
include('inc/logowanie.php');
echo '
<br><Br>
<h4>Dlaczego warto założyć konto?</h4>
- Wymiana skrzynek na skiny<br>
- Wirtualny portfel<br>
- Gratisy przy zakupach<br>
- Promocje<br>
- i inne';

} 
?>				
					


					</div>
				</div>

			</div>

			
		<!-- SRODEK - NEWS -->
			<div class="srodek">

			
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
			
			
				


			</div>  

			
		<!-- Stopka -->
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
			Copyright © 2014 by '.$nazwa.'<br>
			Desing: Terminator<br>
			Code: <a href="http://lagweb.pl/">lagweb.pl</a>'; 

?>			

			
			<div>
		</div>









<!-- **jQuery** -->
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery.js"></script>

<script src="js/jquery.easing.1.2.js"></script>
<script src="js/jquery.visualNav.js"></script>    

<script src="js/isotope.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.gmap.min.js"></script>

<script src="js/jquery.mobilemenu.js"></script>
<script src="js/core-custom.js"> </script>    

<!-- Pretty Photo -->
<link rel="stylesheet" href="css/prettyPhoto.css" media="screen" />
<script src="js/jquery.prettyPhoto.js"></script>
<script>
    jQuery(document).ready(function($){			
        $(".gallery a[data-gal^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,social_tools: false});				
    });
</script>

<script src="js/jquery.carouFredSel-6.2.0-packed.js"></script>

<!-- fire plugin onDocumentReady -->
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