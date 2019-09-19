<div class="nazwaboxa">
				<a href="">Wirtualny portfel</a>
				</div>			
				<div class="news-ng2">
					<div class="ust-tekst5">
		<?php
		if(isset($_SESSION['login'])) {
		
		$result = mysql_query("SELECT * FROM uzytkownicy WHERE nick = '$login'");
		($row = mysql_fetch_object($result));

echo "<center><h3>Posiadasz $row->adverty<img src='img/adv.png'> Advertów.</h3></center>";

echo '<hr>';

// zasilanie portfela
	$query = mysql_query("select * from settings order by id");
	while($rekord = mysql_fetch_array($query))
	{
	
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

$formularz ='<center>
<form action=""  method="post">
<table cellspacing="0" cellpadding="0" width="70%" class="smsdod">
<tr>
<th>Numer</th>
<th>Treść</th>
<th>Cena</th>
<th>Doładowanie</th>
</tr>

<tr onclick="document.getElementById(\'sms1\').checked = true;" style="cursor: pointer;">
<td><input type="radio" required name="sms" id="sms1" value="sms1" />'.$numer12.'</td>
<td>'.$tresc12.'</td>
<td>'.$cena12.' PLN</td>
<td>66 Adv</td>
</tr>

<tr onclick="document.getElementById(\'sms2\').checked = true;" style="cursor: pointer;">
<td><input type="radio" required name="sms" id="sms2" value="sms2" />'.$numer22.'</td>
<td>'.$tresc22.'</td>
<td>'.$cena22.' PLN</td>
<td>133  Adv</td>
</tr>

<tr onclick="document.getElementById(\'sms3\').checked = true;" style="cursor: pointer;">
<td><input type="radio" required name="sms" id="sms3" value="sms3" />'.$numer32.'</td>
<td>'.$tresc32.'</td>
<td>'.$cena32.' PLN</td>
<td>222 Adv</td>
</tr><tr>
<th></th><th></th>
</table>
<table>
Wpisz kod zwrotny SMS:<br>
<tr><td>
</center><input type="text" name="kodw" required maxlength="30" />
</td></tr><tr><td>
<input type="submit" name="dodaj1" value="Dodaj" class="button"/></td></tr>
</table>
</form>
<br>
<hr>
';


if(isset($_POST['dodaj1'])) {
	$kodw = addslashes(htmlspecialchars($_POST['kodw']));
	$login = $_SESSION['login'];
	$data = date('Y-m-d H:i:s');
	
		$result = mysql_query("SELECT * FROM uzytkownicy WHERE nick = '$login'");
		($row = mysql_fetch_object($result));
		$advertyuser = "$row->adverty";
		
		$sms11 = 66;
		$sms22 = 133;
		$sms33 = 222;

	if ($_POST['sms'] == "sms1")  {
	
		$sprawdzkod = mysql_query("SELECT * FROM `kod1` WHERE `kod` = '$kodw';");
		if(mysql_num_rows($sprawdzkod) == 1) {
		echo 'Doładowałeś portfel o '.$sms11.' Advertów.';
		
		// usuwanie użytego kodu
		$usun1 = "DELETE FROM kod1 WHERE `kod`='$kodw'";
		mysql_query($usun1);
		
		// dodawanie usunietego kodu do nowej tabeli
		$zapytanie = mysql_query("INSERT INTO kody (kod, koszt, kto, data)
		VALUES ('$kodw', '1.23', '$login', '$data');");
		
		//info do histori usera o doladowaniu portfela
		$daffaj = mysql_query("INSERT INTO historia (nick, co, data) VALUES ('$login', 'Doladowanie portfela o $sms11', '$data');");
		
		// dodawanie advertów do portfela
		$ilee = $advertyuser + $sms11;
		mysql_query("UPDATE `uzytkownicy` SET `adverty`='$ilee' WHERE `nick`='$login'");
		
		} else {
		echo 'Podany kod jest niepoprawny';
		}
		
	} elseif ($_POST['sms'] == "sms2")  {
	
		$sprawdzkod = mysql_query("SELECT * FROM `kod2` WHERE `kod` = '$kodw';");
		if(mysql_num_rows($sprawdzkod) == 1) {
		echo 'Doładowałeś portfel o '.$sms22.' Advertów.';
		
		// usuwanie użytego kodu
		$usun2 = "DELETE FROM kod2 WHERE `kod`='$kodw'";
		mysql_query($usun2);
		
		// dodawanie usunietego kodu do nowej tabeli
		$zapytanie = mysql_query("INSERT INTO kody (kod, koszt, kto, data)
		VALUES ('$kodw', '2.46', '$login', '$data');");
		
		//info do histori usera o doladowaniu portfela
		$daffaj = mysql_query("INSERT INTO historia (nick, co, data) VALUES ('$login', 'Doladowanie portfela o $sms22', '$data');");
		
		// dodawanie advertów do portfela
		$ilee = $advertyuser + $sms22;
		mysql_query("UPDATE `uzytkownicy` SET `adverty`='$ilee' WHERE `nick`='$login'");
		
		} else {
		echo 'Podany kod jest niepoprawny';
		}
	
	} elseif ($_POST['sms'] == "sms3")  {
	
		$sprawdzkod = mysql_query("SELECT * FROM `kod3` WHERE `kod` = '$kodw';");
		if(mysql_num_rows($sprawdzkod) == 1) {
		echo 'Doładowałeś portfel o '.$sms33.' Advertów.';
		
		// usuwanie użytego kodu
		$usun3 = "DELETE FROM kod3 WHERE `kod`='$kodw'";
		mysql_query($usun3);
		
		// dodawanie usunietego kodu do nowej tabeli
		$zapytanie = mysql_query("INSERT INTO kody (kod, koszt, kto, data)
		VALUES ('$kodw', '3.69', '$login', '$data');");
		
		//info do histori usera o doladowaniu portfela
		$daffaj = mysql_query("INSERT INTO historia (nick, co, data) VALUES ('$login', 'Doladowanie portfela o $sms33', '$data');");
		
		// dodawanie advertów do portfela
		$ilee = $advertyuser + $sms33;
		mysql_query("UPDATE `uzytkownicy` SET `adverty`='$ilee' WHERE `nick`='$login'");
		
		} else {
		echo 'Podany kod jest niepoprawny';
		}
	
	} else {
	echo 'Wybierz usługe.';
	}

} else { //Jeśli nie został wciśnięty przycisk wyświetlamy formularz
		echo $formularz;
	}
	
	/// kod promocyjny

if(isset($_POST['dodajpromo'])) {
	$kodpromo = addslashes(htmlspecialchars($_POST['kodpromo']));
	$login = $_SESSION['login'];
	$data = date('Y-m-d H:i:s');
	
		$result = mysql_query("SELECT * FROM uzytkownicy WHERE nick = '$login'");
		($row = mysql_fetch_object($result));
		$advertyuser = "$row->adverty";

		$result = mysql_query("SELECT * FROM kodpromo WHERE kod = '$kodpromo'");
		($row = mysql_fetch_object($result));
		$kodpr1 = "$row->wartosc";
		
	$sprawdzkod2 = mysql_query("SELECT * FROM `kodpromo` WHERE `kod` = '$kodpromo';");
		if(mysql_num_rows($sprawdzkod2) == 1) {
		echo 'Doładowałeś portfel o '.$kodpr1.' Advertów.';
		
		// usuwanie użytego kodu
		$usun1 = "DELETE FROM kodpromo WHERE `kod`='$kodpromo'";
		mysql_query($usun1);
		
		// dodawanie usunietego kodu do nowej tabeli
		$zapytanie = mysql_query("INSERT INTO kody (kod, koszt, kto, data)
		VALUES ('$kodpromo', 'Kod promocyjny - $kodpr1', '$login', '$data');");
		
		// dodawanie advertów do portfela
		$ilee = $advertyuser + $kodpr1;
		mysql_query("UPDATE `uzytkownicy` SET `adverty`='$ilee' WHERE `nick`='$login'");
		
		} else {
		echo '<font color="red">Taki kod nie istnieje !</font>';
		echo '<br><a href="javascript: history.back()">Wróć</a>';
		}

		
} else {
echo '<form action=""  method="post">


<h3>Kod promocyjny</h3>
<table>
<tr><td>
<input type="text" name="kodpromo" required maxlength="30" /><br></td></tr>
<tr><td>
<input type="submit" name="dodajpromo" value="Dodaj" class="button"/></td></tr>
</form>
</table>

</center>';
}
	
	
	
	
// zasilanie portfela = koniec

} else {
	echo'Aby mieć dostęp do tej strony musisz być zalogowany/a.';
}

?>
			</div>
		</div>