<?php 
define('RANK','5');
require '../includes/init.php';

if(Tools::checkACL($user->rank,ACL_SITE_NEWS_POST)) {
	if(isset($_POST['title'])){
		$_POST['shortdesc'] = str_replace('script','',$_POST['shortdesc']);
		$_POST['content'] = str_replace('script','',$_POST['content']);
		$create = ORM::for_table('habbophp_news')->create();
		$create->title = safe($_POST['title'], 'SQL');
		$create->short = safe($_POST['shortdesc'], 'SQL');
		$create->content = safe($_POST['content'], 'SQL');
		$create->image = safe($_POST['image'], 'SQL');
		$create->date = date('Y-m-d H:i:s');
		$create->comment = safe($_POST['comment'], 'SQL');
		$create->button_text_me = safe($_POST['button_texte'], 'SQL');
		$create->button_link_display = safe($_POST['button_display'], 'SQL');
		$create->button_link_me = safe($_POST['button_link'], 'SQL');
		$create->save();
		addLog($user->username, 'Add a news : '.safe($_POST['title'], 'SQL'));
		echo "1";
	}
}