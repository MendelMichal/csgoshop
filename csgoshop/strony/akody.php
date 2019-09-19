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
<tr><td width="60">Lista kodów:</td><td>
<TEXTAREA name="listakodow" rows="20" cols="80"></TEXTAREA>
 </td></tr>

<tr><td width="60">Cena:</td><td>
<select name="cena11" > 
'.$cenylista.'
</select></td></tr>

<tr><td>
<input type="submit" name="dodajkod1" value="Dodaj" class="button"/></td></tr>
</form>
</table>';

if(isset($_POST['dodajkod1'])) {
	$listakod = $_POST['listakodow'];
	$cena1 = addslashes(htmlspecialchars($_POST['cena11']));
	
	$data = date('Y-m-d H:i:s');
	
$listalinkow = file("kody.txt");
foreach($listalinkow as $wys) { 
		$kod = trim($wys);
	   
	   
		mysql_query("INSERT INTO kodyzwrotnesms (kod, idceny, zapas1, zapas2, data) VALUES ('$kod', '$cena1', '0', '0', now());"); 
		echo 'dodałeś kody do bazy sql !';		
}


	
		//$zapytanie = mysql_query("INSERT INTO przedmioty (nazwa, opis, obrazek, typ, cena1, cena2, sprzedanych, zapas1, zapas2, data)
		//VALUES ('$nazwa', '$opis', '$obrazek', '$typ', '$cena1', '$cena2', '0', '0', '0', '$data');");
}



	} else {
	echo'Nie masz uprawnien do przeglądania tej strony';
	}
?>

			</div>
		</div>
