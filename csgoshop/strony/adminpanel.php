<div class="nazwaboxa">
				<a href="">ACP</a>
				</div>			
				<div class="news-ng2">
					<div class="ust-tekst5">
			<?php
if($_SESSION['ranga'] >= 5) {
	echo'Witaj <b>'.$_SESSION['login'].'</b> w panelu administracyjnym.
	<br><br><center>';
	
	include('menuacp.php');
	

	
echo'
	</center>
	';
	} else {
	echo'Nie masz uprawnien do przeglądania tej strony';
	include('inc/logowanie.php');
	}
?>

			</div>
		</div>