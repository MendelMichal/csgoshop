<?
mysql_connect ("localhost", "root", "") or
die ("Blad podczas polaczenia z MySQL. Jesli mozesz to poinformuj o tym administracje. Sprobuj takze odswiezyc strone.");
mysql_select_db ("csgo_shop") or
die ("Blad podczas wybierania bazy. Jesli mozesz to poinformuj o tym administracje. Sprobuj takze odswiezyc strone.");
mysql_query("SET CHARSET utf8");
mysql_query("SET NAMES `utf8` COLLATE `utf8_polish_ci`"); 
?>