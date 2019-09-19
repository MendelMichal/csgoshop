		<div class="news-ng">
			<div class="ust-tekst4">
			Rejestracja
			</div>
		</div>
		<div class="news-ng2">
			<div class="ust-tekst5">
<?php
if(isset($_SESSION['login'])) {
	echo'Zostałeś wylogowany. Zapraszamy ponownie!';
	session_destroy();
} else {
	echo'Nie jesteś zalogowany!';
}
?>
			</div>
		</div>
