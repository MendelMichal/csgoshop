<div class="nazwaboxa">
				<a href="">ACP</a>
				</div>			
				<div class="news-ng2">
					<div class="ust-tekst5">
<?php
if($_SESSION['ranga'] >= 5) {
include('menuacp.php');
// tutaj bedzie zawartosc

	$query = mysql_query("select * from uzytkownicy order BY `id` DESC");
	while($rekord1 = mysql_fetch_row($query))
	{
	$all1 .= '<tr><td>
				'.$rekord1[0].'
				</td><td>
				'.$rekord1[1].'
				</td><td>
				'.$rekord1[4].'
				</td><td>
				'.$rekord1[5].'
				</td><td>
				<form action="?page=auser&'.$rekord1[0].'" method="post">
				
				<input type="image" title="Dodaj" src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/32/add-icon.png" value="submit" name="dodajadv" onfocus="blur()" style="width:15px; height:15px;" />
						
				<input type="image" title="Usuń" src="http://icons.iconarchive.com/icons/visualpharm/must-have/256/Remove-icon.png" value="submit" name="delluser" onfocus="blur()" style="width:15px; height:15px;" />
				
				</form>
				</td></tr>';
	}
	echo '		
				<table cellpadding=\"2\" border=0 width=700><tr background="img/bgtr.png"><td style="border-bottom:dashed 1px" align="center">
				<b>ID.</b>
				</td><td style="border-bottom:dashed 1px" align="center">
				<b>Nick</b>
				</td><td style="border-bottom:dashed 1px" align="center">
				<b>Ranga</b>
				</td><td style="border-bottom:dashed 1px" align="center">
				<b>Adverty $</b>
				</td><td style="border-bottom:dashed 1px" align="center">
				<b>Opcje</b>
				</td></tr>'.$all1.'</table>';
			
			

			
	echo '<br>
	<br>
	<br>';
	
	if(isset($_POST['delluser'])) {
		$testidu = $_SERVER['QUERY_STRING'];
		$login = addslashes($_SESSION['login']);
		$result = mysql_query("SELECT * FROM uzytkownicy WHERE nick = '$login'");
		($row = mysql_fetch_object($result));
		
		$testrow = "$row->ID";
		
		if($testidu == $testrow) {
		// informacja gdy użytkownik chce usunąć swoje konto
		echo '
	<div class="infoscreen">
	<div class="infoscreencolor"> 
	<div class="infoscreentekst">
		Nie możesz usunąć swojego konta ! ('.$login.')
		
		<p><form><INPUT TYPE="button" VALUE="OK" onClick="parent.location=\'javascript:location.reload()\'"></form> </p>
	</div> </div> </div>';
		} else {	
echo '<div class="infoscreen">
	<div class="infoscreencolor"> 
	<div class="infoscreentekst">
		Trwale usunołeś użytkownika o id: '.$testidu.', '.$rekord1[0].'<br>

		<p><form><INPUT TYPE="button" VALUE="OK" onClick="parent.location=\'javascript:location.reload()\'"></form> </p>
	</div> </div> </div>';
$deluser = "DELETE FROM uzytkownicy WHERE `id`='$testidu'";
		mysql_query($deluser);
		}
		} 
		
		// tutaj dodawanie advertów
			if(isset($_POST['dodajadv'])) {
		$testidu = $_SERVER['QUERY_STRING'];
		$login = addslashes($_SESSION['login']);
		$result = mysql_query("SELECT * FROM uzytkownicy WHERE id = '$testidu'");
		($row = mysql_fetch_object($result));
		
		$testrow = "$row->ID";
		$iloscadvid = "$row->adverty";
			
echo '<div class="infoscreen">
	<div class="infoscreencolor"> 
	<div class="infoscreentekst">
		Ustaw Adverty dla użytkownika o id: '.$testidu.'<br>
		<form method="post">
		<textarea name="advertyid" cols="18" rows="1">'.$iloscadvid.'</textarea>
		
		<p><input type="submit" name="ustaw" value="Dodaj" /></form> </p>
	</div> </div> </div>';
	} 
	
	if(isset($_POST['ustaw'])) {
			$testidu = $_SERVER['QUERY_STRING'];
			$login = addslashes($_SESSION['login']);
			$result1 = mysql_query("SELECT * FROM uzytkownicy WHERE id = '$testidu'");
			($row1 = mysql_fetch_object($result1));
			
			$ustawadv = $_POST['advertyid'];
	
	echo '<div class="infoscreen">
	<div class="infoscreencolor"> 
	<div class="infoscreentekst">
		Ustawiłeś '.$ustawadv.' advertów użytkownikowi o id: '.$testidu.'<br>
		
		<p><form><INPUT TYPE="button" VALUE="OK" onClick="parent.location=\'javascript:location.reload()\'"></form> </p>
	</div> </div> </div>';
	
		mysql_query("UPDATE `uzytkownicy` SET `adverty`='$ustawadv' WHERE `id`='$testidu'");
	
	}
		
		
	} else {
	echo'Nie masz uprawnien do przeglądania tej strony';
	}

// koniec zawartosci

?>

			</div>
		</div>