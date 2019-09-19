		<div class="news-ng">
			<div class="ust-tekst4">
			</div>
		</div>
		
		<?php
//filtruje dane użytkownika
$imie = htmlspecialchars(trim($_POST['imie']));
$mail = htmlspecialchars(trim($_POST['mail']));
$temat =  htmlspecialchars(trim($_POST['temat']));
$wiadomosc = htmlspecialchars(trim($_POST['wiadomosc']));
$send = $_POST['send'];
//mail na który będa wysyłane wiadomości
$odbiorca = "administracja@csgo-shop.pl";
$header = "Content-type: text/html; charset=utf-8\r\nFrom: $mail";

//Sprawdzam czy istnieje ciastko, jeżeli tak wyświetlam komunikat
if (isset($_COOKIE['send'])) $error ='Odczekaj '.($_COOKIE['send']-time()).' sekund przed wysłaniem kolejnej wiadomości';   

if ($send && !isset($_COOKIE['send']))
    {
    //Sprawdzam nick
    if (empty($imie))
        { $error = "Nie wypełniłeś pola <strong>Nick !</strong><br/>"; }
    elseif (strlen($imie) > 20)
        { $error .="Za długi nick - max. 20 znaków <br/>";}
     
    //Sprawdzam mail
    if (empty($mail))
        { $error .= "Nie wypełniłeś pola <strong>E-mail !</strong><br/>"; }
    elseif (strlen($mail) > 30)
        { $error .="Za długi e-mail - max. 30 znaków <br/>";}
    elseif (preg_match('/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ0-9\-\_\.]+\@[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ0-9\-\_\.]+\.[a-z]{2,4}$/',$mail) == false)
        { $error .= "Niepoprawny adres E-mail! <br/>"; }
         
    //Sprawdzam temat
    if (empty($temat))
        { $error .= "Nie wypełniłeś pola <strong>Temat !</strong><br/>"; }
    elseif (strlen($temat) > 120)
        { $error .="Za długi temat - max. 120 znaków <br/>";}
         
    //Sprawdzam wiadomosc
    if (empty($wiadomosc))
        { $error .= "Nie wypełniłeś pola <strong>Wiadomość !</strong><br/>"; }
    elseif (strlen($wiadomosc) > 400)
        { $error .="Za długa wiadomość - max. 400 znaków <br/>";}

    //Sprawdzam czy są błędy i wysyłam wiadomość
    if (empty($error))
        {
        $list = "<b>Wiadomość została wysłana przez :</b>
		<br>
		<br>
<b>Nick:</b> $imie ($mail)
<br><br>
<b>Treść wiadomości:</b> 
<br>
$wiadomosc";
         
        if (mail($odbiorca, $temat, $list, $header))   
        {
         $error .= "Twoja wiadomość została wysłana<br/><br/><br/><br/>";
         }
        else
            { $error .= "Wystąpił błąd podczas wysyłania wiadomości, spróbuj później.<br/><br/><br/><br/>";}   
        }
    }
?>

		<div class="news-ng2">
			<div class="ust-tekst5">
			
<form action="" method="post">
    <fieldset>
    <legend>Formularz kontaktowy</legend>
        <?php echo $error; ?>
        <label for="imie"></label>
        <input type="text" id="imie" name="imie" placeholder="Nick"/>
                     <br>
        <label for="mail"></label>
        <input type="text" id="mail" name="mail" placeholder="Twój adres e-mail"/>
                     <br>
        <label for="temat"></label>
        <input type="text" id="temat" name="temat" placeholder="Temat Twojej wiadomości"/>
                     <br><br>
        <label for="wiadomosc"></label><br>
        <textarea id="wiadomosc" name="wiadomosc" cols="150" rows="20" placeholder="Wpisz swoją wiadmość"></textarea>
                     <br>
        <input type="submit" value="Wyślij" id="send" name="send" />
    </fieldset>
</form>

</body>
			</div>
			</div>