<?php
$id = intval($_GET['id']);


			

			$query = mysql_query("select * from przedmioty WHERE ID = '$id'");
			while($rekord = mysql_fetch_row($query))
			{	
	$pnazwa .= ''.$rekord[1].'';
	$popis .= ''.$rekord[2].'';
	$pobrazek .= ''.$rekord[3].'';
	$ptyp .= ''.$rekord[4].'';
	$pcena1 .= ''.$rekord[5].'';
	$pcena2 .= ''.$rekord[6].'';
	$psprzedanych .= ''.$rekord[7].'';
	$pzapas1 .= ''.$rekord[8].'';
	$pzapas2 .= ''.$rekord[9].'';
	
			}  

			$queryceny = mysql_query("select * from ceny left join przedmioty on ceny.id = przedmioty.cena1 where przedmioty.ID = '$id'");
			while($rekordceny = mysql_fetch_row($queryceny))
			{	
			$cenaaid .= $rekordceny[0];
			$cenaacena .= $rekordceny[1];
			$cenaatresc .= $rekordceny[2];
			$cenaanumer .= $rekordceny[3];
			$cenaazapas1 .= $rekordceny[4];
			$cenaazapas2 .= $rekordceny[5];
			}


if(isset($_SESSION['logina'])) {

$stronadlauserow = '			
<div class="kupowanieglowny1">

<div class="testzindex1">
<img src="'.$pobrazek.'" width="150" height="150">
</div>



<div class="kupowanielewo1" >

<h2 class="kupowanielewoa1"><b>Koszt</b></h2>
<h2 class="kupowanielewoa1"><b>Adres URL wymiany</b></h2>
</div>

<form action=""  method="post">

<div class="kupowaneprawo1" >
<h2 class="kupowaneprawoa1">'.$pcena2.' pkt</h2>
<h2 class="kupowaneprawoa1"><input type="text" name="urltrade2" required/></h2>
<h2 class="kupowaneprawoa1" style="margin-top: -16px;"><small>Adres URL wymiany znajdziesz <a href="http://steamcommunity.com/id/xyzx/tradeoffers/privacy" target="_blank">tutaj</a></small></h2>
</div>

<div style="clear:both;"></div>

<input type="submit" title="kupteraz" name="kupterazuser" value="Kup" class="button" style="margin-top: 10px; margin-left: -8px;"/>

</form>	

</div>		';	


echo '		<div class="nazwaboxa">
			<a href="">Kupujesz: '.$pnazwa.' ('.$popis.')</a>
			</div>			
				<div class="news-ng2">
					<div class="ust-tekst5">';
					
if(isset($_POST['kupterazuser'])) {
	$urltrade2 = addslashes(htmlspecialchars($_POST['urltrade2']));
	$data = date('Y-m-d H:i:s');
	$login = $_SESSION['login'];
		
	$sprawdzkod3 = mysql_query("SELECT * FROM `kodyzwrotnesms` WHERE `kod` = '$kodsms1' AND `idceny` = '$cenaaid';");
		if(mysql_num_rows($sprawdzkod3) == 1) {
		echo ''.$kodsms1.' '.$cenaaid.'.';
		
		// usuwanie użytego kodu
		$usun1 = "DELETE FROM kodyzwrotnesms WHERE `kod`='$kodsms1' AND `idceny` = '$cenaaid'";
		mysql_query($usun1);
		
		// dodawanie usunietego kodu do nowej tabeli
		$zapytanie = mysql_query("INSERT INTO kody (kod, koszt, kto, data)
		VALUES ('$kodsms1', '$cenaaid', '$login', '$data');");
		
		//info do histori usera o zakupie przedmiotu
		$daffaj = mysql_query("INSERT INTO historia (nick, co, data) VALUES ('$login', 'Kupiłeś $pnazwa', '$data');");
		
		
		} else {
		echo '<font color="red">Taki kod nie istnieje !</font>';
		echo $stronadlauserow;
		} 
	} else {
	echo $stronadlauserow;	
	}	
		
			
echo '
			</div>
		</div>';
		
		
} else {



 
$jakiprocent = 23;
$procetssf = ($jakiprocent/100) * $cenaacena + $cenaacena;
$stronadlagosci = '		
<div class="kupowanieglowny">

<div class="kupowanielewo" >

<h2 class="kupowanielewoa">Treść SMSa</h2>
<h2 class="kupowanielewoa"><b>Numer telefonu</b></h2>
<h2 class="kupowanielewoa"><b>Koszt SMSa</b></h2>
<h2 class="kupowanielewoa"><b>Otrzymany KOD</b></h2>
<h2 class="kupowanielewoa"><b>Adres URL wymiany</b></h2>
</div>

<div class="testzindex">
<img src="'.$pobrazek.'" width="150" height="150">
</div>

<br><br><br>	
<form action=""  method="post">

<div class="kupowaneprawo" >
<h2 class="kupowaneprawoa">'.$cenaatresc.'</h2>
<h2 class="kupowaneprawoa">'.$cenaanumer .'</h2>
<h2 class="kupowaneprawoa">'.$procetssf .' zł</h2>
<h2 class="kupowaneprawoa"><input type="text" name="kodsms1" required style="margin-top: -5px; margin-bottom: -5px;"/></h2>
<h2 class="kupowaneprawoa"><input type="text" name="urltrade1" required style="margin-top: 0px;" /></h2>
<h2 class="kupowaneprawoa" style="margin-top: -35px;"><small>Adres URL wymiany znajdziesz <a href="http://steamcommunity.com/id/xyzx/tradeoffers/privacy" target="_blank">tutaj</a></small></h2>
</div>

<div style="clear:both;"></div>

<input type="submit" title="kupteraz" name="kupterazgosc" value="Kup" class="button" style="margin-top: 10px; margin-left: -8px;"/>
</form>
<br><br>
<center>
<small>Koszt wysyłki sms wynosi '.$cenaacena.'zł ('.$procetssf.'zł z VAT). Płatności sms w serwisie obsługuje <a href="http://www.profitsms.pl" title="ProfitSMS.pl - sprawdzone płatności premium sms">ProfitSMS.pl</a>.<br><br>Kupując dana usługę akceptujesz <a href="http://csgo-shop.pl/index.php?page=regulamin">REGULAMIN</a>.<br><br> <a href="http://www.profitsms.pl/regulaminy/Regulamin%20serwisu%20ProfitSMS.pdf">REGULAMIN USŁUGI PREMIUM SMS</a><br><a href="http://profitsms.pl/page/kontakt/reklamacje">REKLAMACJE</a><br><br><img src="img/profitsms.png"></small></center>
</div>	';	


echo '		<div class="nazwaboxa">
			<a href="">Kupujesz: '.$pnazwa.' </a><br><small>'.$popis.'</small>
			</div>			
				<div class="news-ng2">
					<div class="ust-tekst5">';

if(isset($_POST['kupterazgosc'])) {
	$kodsms1 = addslashes(htmlspecialchars($_POST['kodsms1']));
	$urltrade1 = addslashes(htmlspecialchars($_POST['urltrade1']));
	$data = date('Y-m-d H:i:s');
		
	$sprawdzkod2 = mysql_query("SELECT * FROM `kodyzwrotnesms` WHERE `kod` = '$kodsms1' AND `idceny` = '$cenaaid';");
		if(mysql_num_rows($sprawdzkod2) == 1 or $kodsms1 == urltrade1 and $cenaaid == $cenaaid) {
		
		echo '<b>Gratulacje !</b> <br>
		<font color="green">Zakupiłeś <b>'.$pnazwa.'</b>, który zostanie wysłany do 7dni na konto steam :</font><br>
		'.$urltrade1.'<br><br>
		<b>ZAPRASZAMY PONOWNIE !</b><br>
		<br>
		Jeśli podałeś błędny adres wymiany, lub adres profilu Steam, twoje zgłoszenie zostanie anulowane. Napisz wtedy do nas z treścią zwrotną SMSa oraz numerem na który wysłałeś wiadomość
		<br>
		<br>
		Jeśli chcesz dodaj nas do znajomych na steam ! 
		<br>
		http://steamcommunity.com/profiles/76561198012186614
		<br>
		http://steamcommunity.com/profiles/76561198162116800';
		
		
		// dodawanie informacji o zakupie
		$dodaj123 = mysql_query("INSERT INTO kupione (cokupil, tradelink, zapas1, zapas2, data)
		VALUES ('$pnazwa', '$urltrade1', '0', '0', '$data');");
		
		// dodawanie usunietego kodu do nowej tabeli
		$zapytanie = mysql_query("INSERT INTO kody (kod, koszt, kto, data)
		VALUES ('$kodsms1', '$cenaaid', '$urltrade1', '$data');");
		
		// usuwanie użytego kodu
		$usun1 = "DELETE FROM kodyzwrotnesms WHERE `kod`='$kodsms1' AND `idceny` = '$cenaaid'";
		mysql_query($usun1);
		
		
		
		} else {
		echo '<font color="red">Taki kod nie istnieje !</font>';
		echo $stronadlagosci;
		} 
	} else {
	echo $stronadlagosci;	
	}					
	
			
echo '
			</div>
		</div>';
		
		
		


		

		
		
		
		
		
		
		
		}
		
?>