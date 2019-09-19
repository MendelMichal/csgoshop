<div class="nazwaboxa">
				</div>			
			<!--<div class="news-ng2">
					<div class="ust-tekst5">
</div>
				</div>-->
												


				<div class="news-ng2">
					<div class="ust-tekst5">
					

					
			


<br>
<center>   				
<div class="portfolio-container gallery">
<?php
	$query = mysql_query("select * from przedmioty order BY `id` DESC");
	while($rekord1 = mysql_fetch_row($query))
	{
			
			$query1 = mysql_query("SELECT * FROM ceny WHERE ID = '$rekord1[5]'");
			$row = mysql_fetch_array($query1);
			
			
	$listaprzedmiotow .= '	
			<div class="portfolio all-sort '.$rekord1[4].'">
<div id="ikony" style="display: inline-block;"><div id="ikony22" style="color: #0269f5;">'.$rekord1[1].'</div><img src="'.$rekord1[3].'" width="200" height="200" alt="skiny cs go za sms"><br><br><br><br><br><a href="?page=kup&id='.$rekord1[0].'"><b>KUP ZA:</b><br> '.$row['cena'].' zł</a></div>
            </div>
			';	
	}
	

	
	echo $listaprzedmiotow;
?>

          
				
			
					
					
</div>					
</center>
					

		
		



					</div>
				</div>