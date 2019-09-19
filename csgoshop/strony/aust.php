<div class="nazwaboxa">
				<a href="">ACP</a>
				</div>			
				<div class="news-ng2">
					<div class="ust-tekst5">
			<?php
if($_SESSION['ranga'] >= 5) {

include('menuacp.php');

if(!isset($_POST['edycja'])) {
			$query = mysql_query("select * from settings order by id");
	while($rekord = mysql_fetch_array($query))
	{
	$news123 .= ''.$rekord[12].'';
	$nazwa2 .= ''.$rekord[1].'';
	$opis2 .= ''.$rekord[2].'';
	
	$numer12 .= ''.$rekord[3].'';
	$tresc12 .= ''.$rekord[4].'';
	$cena12 .= ''.$rekord[5].'';
	
	$numer22 .= ''.$rekord[6].'';
	$tresc22 .= ''.$rekord[7].'';
	$cena22 .= ''.$rekord[8].'';
	
	$numer32 .= ''.$rekord[9].'';
	$tresc32 .= ''.$rekord[10].'';
	$cena32 .= ''.$rekord[11].'';
	}
	echo '		<h2>Edycja danych</h2>
	<form action="" method="post">
				<table>
					<tr>
						<td width="120">
							News
						</td>
						<td>
							<textarea name="news" cols="60" rows="2">'.$news123.'</textarea>
						</td>
					</tr>				
					<tr>
						<td width="120">
							Nazwa strony
						</td>
						<td>
							<textarea name="nazwa" cols="40" rows="1">'.$nazwa2.'</textarea>
						</td>
					</tr>
					<tr>
						<td>
							Opis strony
						</td>
						<td>
							<textarea name="opis" cols="40" rows="1">'.$opis2.'</textarea>
						</td>
					</tr>
					
					
				</table>
				<input type="submit" name="edycja" value="Edytuj dane" />
			</form>';
			
			
	} else {
		$news = $_POST['news'];
		$nazwa = addslashes(htmlspecialchars($_POST['nazwa']));
		$opis = addslashes(htmlspecialchars($_POST['opis']));
		
		echo'<br><br>Dane zostały zmodyfikowane pomyślnie!';
		
		mysql_query("UPDATE `settings` SET `nazwastrony`='$nazwa',`opisstrony`='$opis', `numer1`='$numer1',`tresc1`='$tresc1',`cena1`='$cena1', `numer2`='$numer2',`tresc2`='$tresc2',`cena2`='$cena2', `numer3`='$numer3',`tresc3`='$tresc3',`cena3`='$cena3',`news`='$news' WHERE `id`='1'");
		//$idzapytania = mysql_query($zapytanie);
	}


	} else {
	echo'Nie masz uprawnien do przeglądania tej strony';
	}
?>

			</div>
		</div>