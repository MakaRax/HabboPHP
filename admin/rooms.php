<?php include 'includes/header.php'; 
if(!Tools::checkACL($user->rank, ACL_ROOM_DEFAULT_REGISTER)){
	header("Location: /admin/");
	die();
}
$success = false;
?>
<header class="jumbotron subhead" id="overview">
  <h1>Apparts</h1>
  <p class="lead">Modifier l'appart de base à l'inscription</p>
  <div class="subnav">
   <ul class="nav nav-pills">
      <?php if(Tools::checkACL($user->rank, ACL_ROOM_DEFAULT_REGISTER)){ ?><li><a href="#">Construire un appart par défaut</a></li><?php } ?>
  </ul>
  </div>
</header>
<section id="search">
	<div class="form-horizontal" style="margin-top:-60px;">
        <fieldset>
        	<?php
        	if(isset($_POST['id'])){
        		$room = mysql_query("SELECT * FROM rooms WHERE id = '".safe(intval($_POST['id']), 'SQL')."'");
        		$r = mysql_fetch_assoc($room);
        		if($r['caption'] !== NULL){
        		$first = '<room id="default">
	<roomdata>
		<roomtype>private</roomtype>
		<caption>'.$r['caption'].'</caption>
		<model_name>'.$r['model_name'].'</model_name>
		<description>'.$r['description'].'</description>
	</roomdata>';
				$first .= '<roomitem>';
				$item = mysql_query("SELECT base_item, x, y, z, rot FROM items WHERE room_id = '".safe(intval($_POST['id']), 'SQL')."'");
				$it = mysql_fetch_assoc($item);
				while($i = $it){
					$first .= '<item>
			<base_item>'.$i['base_item'].'</base_item>
			<x>'.$i['x'].'</x>
			<y>'.$i['y'].'</y>
			<z>'.$i['z'].'</z>
			<rot>'.$i['rot'].'</rot>
		</item>';
				}
				$first .= "</roomitem>";
				$first .= "</room>";
				$f = "../modules/rooms/default.xml";
				if(is_writable($f)){
					$open = fopen($f, "w");
					fwrite($open, $first);
					fclose($open);
					echo '<div class="alert alert-success">Appart de base modifié !</div>';
				} else {
					echo "<div class=\"alert alert-error\">Le fichier /modules/rooms/default.xml n'est pas écrivable (chmod < 777). Vous pouvez tout de même l'écrire à la main avec le code disponible ci-dessous.</div>";
					echo "<div class=\"well\">".htmlentities($first)."</div>";
				}
			} else {
				echo '<div class="alert alert-error">Aucun appart n\'a été trouvé avec cet identifiant.</div>';
			}				
        }
        ?>
        	<form action="#" method="post">
			<input type="text" class="" style="width:99%;font-size:24px; height:40px;" placeholder="Identifiant de l'appart à mettre par défaut" name="id">       
          	<div class="form-actions" style="text-align:center;">
            <input type="submit" style="margin-left:-154px;font-size:24px;" class="btn btn-primary btn-large" value="Mettre par défaut" />
          </div>
      </form>
        </fieldset>
      </div>
</section>
