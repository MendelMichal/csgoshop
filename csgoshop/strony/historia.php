		<div class="news-ng">
			<div class="ust-tekst4">
			Historia zamówień
			</div>
		</div>
		<div class="news-ng2">
			<div class="ust-tekst5">
		<?php
		if(isset($_SESSION['login'])) {
			$login = addslashes($_SESSION['login']);
			$query = mysql_query("select * from historia WHERE nick = '$login' order BY `id` DESC");
			while($rekord = mysql_fetch_row($query))
			{	
			$paczajto .= '<tr><td>
				'.$rekord[2].'
				</td><td>
				'.$rekord[3].'
				</td></tr>';

			}        
echo '<form action="?page=histlink" method="POST" >
<input type="submit" title="Historia linków" name="histlink" value="Historia linków" class="button" style="width: 120px; margin-left: -1px;"/>
</form><br>';
echo "<table style='width: 80%; border-collapse: collapse; border: 1px;' border='2'>
<tr>
<td><b>Usługa</b></td>
<td><b>Data</b></td>
<tr>
".$paczajto."
</table><br><br>";
} else {
	echo'Aby mieć dostęp do tej strony musisz być zalogowany/a.';
}

?>
			</div>
		</div>