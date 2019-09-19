<?php
$formularz = '
<form action="" method="post">
Login
	<input type="text" name="login" required />
	<br>
Hasło
	<input type="password" name="password" required />
	<br>
	<!-- <input type="image" title="Zaloguj" src="img/zaloguj.png" name="logowanie" value="Zaloguj" style="width:86px; height:28px;" />	-->
	<input type="submit" title="Zaloguj" name="logowanie" value="Zaloguj" class="button" />	
</form>
';
 
$login = addslashes(htmlspecialchars($_POST['login'])); //nadajemy zmiennej login wartosc z POST
$haslo = md5(addslashes(htmlspecialchars($_POST['password']))); //nadajemy zmiennej haslo wartosc z POST
 
if(!empty($_POST['logowanie'])) { //jesli klikniemy przycisk wykonuje sie skrypt
   if(empty($login)) { //jesli nie wpisalismy loginu
	  echo 'Podaj login!'; //echujemy wiadomosc
   }
   elseif(empty($haslo)) { //jesli nie wpisalismy hasla
	  echo 'Podaj hasło!'; //echujemy wiadomosc
   }
   else { //jesli sa wpisane login i haslo
	  $zapytanie = mysql_query("SELECT * FROM `uzytkownicy` WHERE `nick` = '$login' AND `haslo` = '$haslo';"); //zapytujemy baze danych
	   while ($zapytanie && $rekord = mysql_fetch_assoc($zapytanie)) { //petla, aby pobrac wyniki
		  $loginzbazy = $rekord['nick']; //zapisujemy login z bazy do zmiennej
		  $haslozbazy = $rekord['haslo']; //zapisujemy haslo z bazy do zmiennej
		  $ranga = $rekord['ranga']; //zapisujemy range z bazy do zmiennej
	   }
	   if($login != $loginzbazy || $haslo != $haslozbazy) { //jesli login lub/i haslo bedzie inne niz to z bazy
		  echo 'Niepoprawny login lub/i haslo!<br>'.$formularz.''; //echujemy wiadomosc
	   } elseif($login == $loginzbazy && $haslo == $haslozbazy) { //jesli dane sie zgadzaja
			
				// pobieranie adresu IP:
				function GetClientIP(){ 

				if ($_SERVER['HTTP_X_FORWARDED_FOR']) { 
					$clientip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
				} 
				else { 
				  $clientip = $_SERVER['REMOTE_ADDR']; 
				} 

				return $clientip; 
				}
			
	   
		    $_SESSION['login'] = $loginzbazy; //zapisujemy login z bazy do sesji
		    $_SESSION['haslo'] = $haslozbazy; //zapisujemy haslo z bazy do sesji
		    $_SESSION['ranga'] = $ranga; //zapisujemy range z bazy do sesji
			$pobierzip = GetClientIP();		// pobiera dane z funkcji GetClientIP
		    echo '<br>Zostałeś poprawnie zalogowany/s <b>'.$_SESSION['login'].'</b>!<br><Br>
			Kliknij tutaj, aby przejść do panelu!<br>
			<center><a href="index.php?page=adminpanel">PANEL</a></center>
			'; //echujemy wiadomosc
			
			$loginaa = addslashes($_SESSION['login']);
			$result = mysql_query("SELECT * FROM uzytkownicy WHERE nick = '$loginaa'");
			($row = mysql_fetch_object($result));
			
			mysql_query("UPDATE `uzytkownicy` SET `ip`='$pobierzip' WHERE nick = '$loginaa'");
			
			/*if($_SESSION['ranga'] >= 5) {
			header( 'Location: index.php?page=adminpanel' ) ;
			} else {
			header( 'Location: index.php?page=home' ) ;
			}*/
	   } else { //jesli wystapi nieoczekiwany blad
		    echo 'Wystąpił nieoczekiwany błąd. Spróbuj ponownie.<br>'.$formularz.''; //echujemy wiadomosc
	   }
   }
} else { //jesli nie klikniemy przycisku wyswietlamy formularz
   if(isset($_SESSION['login'])) { //jesli istnieje sesja z loginem
	  echo 'Jesteś już zalogowany jako<b> '.$_SESSION['login'].'</b>!'; //echujemy wiadomosc
   } else { //jesli nie ma sesji z loginem
	  echo $formularz; //wyswietlamy formularz
	}
}
?>
