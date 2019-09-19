<div class="nazwaboxa">
				<a href="">ACP</a>
				</div>	
				<div class="news-ng2">
					<div class="ust-tekst5">		

<?php
if($_SESSION['ranga'] >= 5) {
include('menuacp.php');
echo '<br><br>Po kliknięciu "GOTOWE" odswież stronę';

	
	$query = mysql_query("select * from kupione order BY `id` DESC");
	while($rekord1 = mysql_fetch_row($query))
	{
	$spis .= '<tr><td>
				'.$rekord1[0].'
				</td><td>
				'.$rekord1[1].'
				</td><td>
				'.$rekord1[2].'
				</td><td>
				'.$rekord1[5].'
				</td><td>
				<form action="?page=astat&delltrade='.$rekord1[0].'" method="post">
<input type="submit" title="delltrade1" name="delltrade1" value="Gotowe" class="button" style="margin-top: 3px; margin-bottom: 3px;" />
				</form>
				</td></tr>';
	}
	
	echo '		<br><br>
				<table cellpadding=\"2\" border=1 width="100%"><tr><td>
				<b>ID.</b>
				</td><td>
				<b>Co kupił</b>
				</td><td>
				<b>Trade link</b>
				</td><td>
				<b>Data</b>
				</td><td>
				<b>Usun</b>
				</td></tr>'.$spis.'</table>';
				
				
				
if(isset($_POST['delltrade1'])) {
$idtrade = $_GET['delltrade'];

		// usuwanie użytego kodu
		$usuntrade = "DELETE FROM kupione WHERE `id`='$idtrade'";
		mysql_query($usuntrade);
}


	} else {
	echo'Nie masz uprawnien do przeglądania tej strony';
	}
?>

			</div>
		</div>