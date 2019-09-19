<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" />
  <title>Dodaj komentarz</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php

$nick = stripslashes(trim(htmlspecialchars($_POST['nick'])));
$tresc = nl2br(stripslashes(trim(htmlspecialchars($_POST['tresc']))));
$tresc = wordwrap($tresc, 60, "<br />", 1);
$data = date('Y-m-d H:i');
$szablon = '<b>'.$nick.'</b> <small><i>'.$data.'</i></small><br /><p>'.$tresc.'</p>';
if((strlen($nick) < 3)||(strlen($tresc) < 10))
{
echo 'Nie wypełniłeś wszystkich pól w formularzu. <a href="testtest.php">Powrót</a>';
exit;
}
if ((isset($_POST["submit"])) && (!isset($_COOKIE["formularz"]))) {
setcookie ("formularz", "formularz", time()+30);
}
else {
echo 'Musisz zaczekać 30 sekund, aby dodać nowy komentarz. <a href="testtest.php">Powrót</a>';
exit;
}
$plik = "komentarze.txt";
$tmp = file_get_contents($plik);
$fp = fopen($plik, 'w');
fwrite($fp, $szablon . $tmp);
fclose($fp);
header('Location: testtest.php');

?>

</body>
</html>