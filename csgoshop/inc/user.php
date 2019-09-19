<?php
$login = $_SESSION['login'];

		$result = mysql_query("SELECT * FROM uzytkownicy WHERE nick = '$login'");
		($row = mysql_fetch_object($result));

echo "Portfel: $row->adverty<img src='img/adv.png'><br><br>";

echo '
<a href="index.php?page=portfel">wPortfel</a><br>
<a href="index.php?page=wymien">Wymień skrzynki</a><br>
<a href="index.php?page=promocje">Promocje</a><br>
<a href="index.php?page=historia">Historia zamówień</a><br>
<a href="index.php?page=wiadomosci">Wiadomości (0|0)</a><br>

<hr>
<a href="index.php?page=3">Wyloguj</a> &nbsp;&nbsp;&nbsp;&nbsp;';
if($_SESSION['ranga'] >= 5) {
echo '<a href="index.php?page=acp">ACP</a>';
}

?>