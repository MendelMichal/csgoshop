<div class="nazwaboxa">
				<a href="">ACP</a>
				</div>			
				<div class="news-ng2">
					<div class="ust-tekst5">
			<?php
if($_SESSION['ranga'] >= 5) {

include('menuacp.php');

	$query = mysql_query("select * from ceny");
	while($rekord1 = mysql_fetch_row($query))
	{
	$cenylista .= '<option value="'.$rekord1[0].'">'.$rekord1[1].' : '.$rekord1[2].' : '.$rekord1[3].'</option> ';
	}

echo '<form action=""  method="post">
<h3>Dodaj kod</h3>
<table>
<tr><td width="60">Nazwa:</td><td>
<input type="text" name="nazwa1" required /></td></tr>

<tr><td width="60">Opis:</td><td>
<input type="text" name="opis1" required /></td></tr>

<tr><td width="60">Obrazek:</td><td>
<input type="text" name="obrazek1" required /></td></tr>

<tr><td width="60">Typ:</td><td>
<select name="typ1" > 
<option value="bronie">Bronie</option> 
<option value="stat">StatTrak™</option> 
<option value="skrzynki">Skrzynki</option> 
<option value="klucze">Klucze</option> 
<option value="nakl">Naklejki</option>
<option value="inne">Inne</option>
</select> </td></tr>

<tr><td width="60">Cena:</td><td>
<select name="cena11" > 
'.$cenylista.'
</select></td></tr>

<tr><td width="60">Cena dla userów:</td><td>
<input type="text" name="cena21" required /></td></tr>

<tr><td>
<input type="submit" name="dodajkod" value="Dodaj" class="button"/></td></tr>
</form>
</table>';

if(isset($_POST['dodajkod'])) {
	$nazwa = addslashes(htmlspecialchars($_POST['nazwa1']));
	$opis = addslashes(htmlspecialchars($_POST['opis1']));
	$obrazek = addslashes(htmlspecialchars($_POST['obrazek1']));
	$typ = addslashes(htmlspecialchars($_POST['typ1']));
	$cena1 = addslashes(htmlspecialchars($_POST['cena11']));
	$cena2 = addslashes(htmlspecialchars($_POST['cena21']));
	$sprzedanych = addslashes(htmlspecialchars($_POST['sprzedanych1']));
	$zapas1 = addslashes(htmlspecialchars($_POST['zapas11']));
	$zapas2 = addslashes(htmlspecialchars($_POST['zapas21']));
	
	$data = date('Y-m-d H:i:s');
	
		$zapytanie = mysql_query("INSERT INTO przedmioty (nazwa, opis, obrazek, typ, cena1, cena2, sprzedanych, zapas1, zapas2, data)
		VALUES ('$nazwa', '$opis', '$obrazek', '$typ', '$cena1', '$cena2', '0', '0', '0', '$data');");
}

	$query = mysql_query("select * from przedmioty order BY `id` DESC");
	while($rekord1 = mysql_fetch_row($query))
	{
	$spis .= '<tr><td>
				'.$rekord1[0].'
				</td><td>
				'.$rekord1[1].'
				</td><td>
				'.$rekord1[2].'
				</td><td>
				<img src="'.$rekord1[3].'" width="65" height="65">
				</td><td>
				'.$rekord1[4].'
				</td><td>
				'.$rekord1[5].' : '.$rekord1[6].'
				</td><td>
				<form action="?page=adodaj&delitem1='.$rekord1[0].'" method="post">
<input type="submit" title="delitem1" name="delitem1" value="Usun" style="margin-top: 3px; margin-bottom: 3px;" />
				</form>
				</td></tr>';
	}
echo '<br><br>Po kliknięciu "USUN" odswież stronę';	
	
	echo '		<br><br>
				<table cellpadding=\"2\" border=1 width=100%><tr><td>
				<b>ID.</b>
				</td><td>
				<b>Nazwa</b>
				</td><td>
				<b>Opis</b>
				</td><td>
				<b>Obrazek</b>
				</td><td>
				<b>Typ</b>
				</td><td>
				<b>Cena ID : Cena usera</b>
				</td><td>
				<b>Usuń</b>
				</td></tr>'.$spis.'</table>';
				
if(isset($_POST['delitem1'])) {
$delitem12 = $_GET['delitem1'];
		// usuwanie użytego kodu
		$usuntrade = "DELETE FROM przedmioty WHERE `id`='$delitem12'";
		mysql_query($usuntrade);
}				
				

	} else {
	echo'Nie masz uprawnien do przeglądania tej strony';
	}
?>

			</div>
		</div>
