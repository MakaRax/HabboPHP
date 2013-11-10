<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
jQuery.noConflict();
</script>
<div id="container">
	<div id="content" class="clear fix" style="position:relative; width:83%;">
		<div class="habblet-container">
			<div class="cbb clearfix settings">
				<h2 class="title">
					Poster sa dédicace
				</h2>
				<div class="box-content">
					{if isset($display_error)}
					<div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;" class="not_enought_money">
						{if isset($error_jetons)}{$error_jetons}<br>{/if}
						{if isset($dedi_error_long)}{$dedi_error_long}<br>{/if}
						{if isset($dedi_error_empty)}{$dedi_error_empty}<br>{/if}
					</div>
					{/if}
					Publie ta dédicace pour seulement {$config->dediprix} {$config->moneyname} !<br>
					Après l'avoir publier, tu verras que ta dédicace apparaître dans la partie de l'entête de toutes les pages de {$config->name}.
					<br><br><center><form action="dedi.php" method="post">
						<textarea name="message" style="height:60px; width:300px;"></textarea><br>
						<input type="submit" value="Publier ma dédicace" />
					</form></center>
					Ton message doit contenir entre 1 et 255 caractères !
				</div>
			</div>
		</div>
	</div>
</div>
