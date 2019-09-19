<div class="nazwaboxa">
				<a href="">ACP</a>
				</div>			
				<div class="news-ng2">
					<div class="ust-tekst5">
			<?php
if($_SESSION['ranga'] >= 5) {

include('menuacp.php');

$formularzcald = '		<h2>Dodaj lub usun ceny</h2>
	<form action="" method="post">
				<table>
					<tr>
						<td width="120">
							Cena <br>
							<small>Cena smsa</small>
						</td>
						<td>
							<textarea name="cenac" cols="40" rows="1"></textarea>
						</td>
					</tr>				
					<tr>
						<td width="120">
							Tresc SMS <br>
							<small>Tresc smsa</small>
						</td>
						<td>
							<textarea name="trescc" cols="40" rows="1"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							Numer SMS <br>
							<small>Numer na który trzeba wysłać SMS</small>
						</td>
						<td>
							<textarea name="numerc" cols="40" rows="1"></textarea>
						</td>
					</tr>
					
				</table>
				<input type="submit" name="dodajcene" value="Dodaj" />
			</form>';
			
if(!isset($_POST['dodajcene'])) {
			$query = mysql_query("select * from ceny order by id");
	while($rekord = mysql_fetch_array($query))
	{
	$adsdfsdfsdfsdfsdfsdfsdf .= ''.$rekord[1].'';

	}
	echo $formularzcald;
			
			
	} else {
		$cenacena = addslashes(htmlspecialchars($_POST['cenac']));
		$cenatresc = addslashes(htmlspecialchars($_POST['trescc']));
		$cenanumer = addslashes(htmlspecialchars($_POST['numerc']));
		echo'<br><br>Dane zostały dodane pomyślnie!<br>';
		echo $formularzcald;
		
		$zapytanie = mysql_query("INSERT INTO ceny (cena, tresc, numer, zapas1, zapas2, data)
		VALUES ('$cenacena', '$cenatresc', '$cenanumer', '0', '0', '$data');");
		//$idzapytania = mysql_query($zapytanie);
	}
	
	$query = mysql_query("select * from ceny order BY `id` DESC");
	while($rekord1 = mysql_fetch_row($query))
	{
	$spis .= '<tr><td>
				'.$rekord1[0].'
				</td><td>
				'.$rekord1[1].' zł
				</td><td>
				'.$rekord1[2].'
				</td><td>
				'.$rekord1[3].'
				</td><td>
				'.$rekord1[4].'
				</td><td>
				'.$rekord1[5].'
				</td></tr>';
	}
	
	
	echo '		<br><br>
				<table cellpadding=\"2\" border=1 width=700><tr><td>
				<b>ID.</b>
				</td><td>
				<b>Cena</b>
				</td><td>
				<b>Tresc</b>
				</td><td>
				<b>Numer</b>
				</td><td>
				<b>Zapas1</b>
				</td><td>
				<b>Zapas2</b>
				</td></tr>'.$spis.'</table>';

	} else {
	echo'Nie masz uprawnien do przeglądania tej strony';
	}
?>

			</div>
		</div>