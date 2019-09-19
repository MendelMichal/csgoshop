<html><head>
  <meta http-equiv="Refresh" content="1; url=index.php" />
</head><body>

<?php
if(isset($_SESSION['login'])) {
	echo'Wylogowanie przebiegło pomyślnie'.$_SESSION['login'];
	session_destroy();
} else {
	echo'Jesteś już wylogowany/a';
}
?>

</body></html>
