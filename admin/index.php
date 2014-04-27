<?php require 'includes/header.php'; ?>
<header class="jumbotron subhead" id="overview">
  <h1>HabboPHP</h1>
  <p class="lead">Bienvenue dans ton administration <b><?php echo addslashes($user->username); ?></b></p>
</header>

<div class="row"> 
	<div class="span12">
		<?php
		
		if(!defined('VERSION')){
			define('VERSION','Version inconnue');
		}
		if(!VersionIsLast()){
		  echo'<div class="alert alert-error"><b>Attention</b> : Une mise à jour est disponible : <a href="https://github.com/habbophp/HabboPHP">HabboPHP '. file_get_contents('http://release.habbophp.com') .'</a></div>';
		} else {
		  echo '<div class="alert alert-success">Vous disposez de la dernière version d\'HabboPHP</div>';
		}
		?>
		<div class="alert alert-info">Votre version HabboPHP : <b><?php echo VERSION ; ?></b></div>
	</div>
	<div class="span6">
		<div class="well">
			<h2>Informations sur votre serveur</h2>
				<li><b>Informations sur votre serveur:</b> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
				<li><b>Version de PHP:</b> <?php echo phpversion(); ?></li>
				<li><b>Limite de mémoire:</b> <?php echo ini_get('memory_limit'); ?></li>
				<li><b>Temps d'exécution maximal (max_execution_time): </b><?php echo ini_get('max_execution_time'); ?></b></li>
				<li><b>Version de MySQL:</b> <?php echo mysql_get_server_info(); ?></li>
				<li><b>Url de l'installation:</b> <?php echo $config->url_site; ?></li>
	</div>
</div>
<div class="span6">
		<div class="well">
			<h2>Informations sur votre hôtel</h2>
				<li><b>Membres inscrits: </b> <?php echo mysql_num_rows(mysql_query('SELECT id FROM users')); ?></li>
				<li><b>Membres en ligne: </b> <?php echo mysql_num_rows(mysql_query('SELECT id FROM users WHERE online="1"')); ?></li>
				<li><b>Homme:</b> <?php echo mysql_num_rows(mysql_query('SELECT id FROM users WHERE gender="M"')); ?></li>
				<li><b>Femme:</b> <?php echo mysql_num_rows(mysql_query('SELECT id FROM users WHERE gender="F"')); ?></li>
	<li><b>Staff en ligne: </b><?php echo mysql_num_rows(mysql_query('SELECT id FROM users WHERE online="1" AND rank>5')); ?></li>
	<li><b>Hotel</b>: <?php if(HotelIsOnline()){ ?>En ligne<?php } else { ?>Hors ligne<?php } ?></li>
	</div>
</div>
<br style="clear:both"/>
	<div class="span6">
	<h2>Tweets</h2>
	<a class="twitter-timeline" href="https://twitter.com/HabboPHPCom" data-widget-id="352558774193639424">Tweets de @HabboPHPCom</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
<<<<<<< HEAD
	<div class="span6">
=======
	<div class="span6" style="display:none;">
>>>>>>> 76089e7ab762f43b1f2c4fdf640ea94eb5019966
		<h2>Quoi de neuf ?</h2>
		<div class="well">
			<iframe style="width:530px;border:none;height:355px;" src="http://release.habbophp.com/new.php"></iframe>
		</div>
	</div>
	<div class="span6">
	<?php if(Tools::checkACL($user->rank,ACL_INDEX_NOTES)) : ?>
  <h2><?php echo $lang['Notes']; ?></h2>
  	<textarea style="width:100%;height:290px;" id="notes" ><?php echo $config->notes ; ?></textarea><br/>
  	<button type="button" onclick="setconfig($('.nicEdit-main').html(),'notes');" class="btn btn-primary"><?php echo $lang['Save']; ?></button>
  <?php endif ;?>
	</div>
</div>

<?php require 'includes/footer.php'; ?>
