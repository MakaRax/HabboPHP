<?php 
	require 'init.php';
	if(isset($_POST['message']))
	{
		$error = new Error();
		$message = safe($_POST['message'], 'SQL');
		if(strlen($message) > 255){
			$tpl->assign('dedi_error_long', $tpl->getConfigVars('dedi_error_long'));
			$error->set('dedi_error_long', 1);
		} 
		if(empty($message)){
			$tpl->assign('dedi_error_empty', $tpl->getConfigVars('dedi_error_empty'));
			$error->set('dedi_error_empty', 1);
		}
		if($config->dediprix > $user->jetons){
			$tpl->assign('error_jetons', $tpl->getConfigVars('error_jetons'));
			$error->set('error_jetons', 1);
		}
		if($error->ErrorPresent())
		{
			$tpl->assign('display_error', 'true');
		} 
		else
		{
			$dedis = ORM::for_table('habbophp_dedis')->create();
			$dedis->username = $user->username;
			$dedis->message = $message;
			$dedis->save();
			if($user->deleteJetons($config->dediprix)); echo '' ;
		}
	}
	$tpl->assign('groups', 'shop');
	$tpl->display('header.tpl');
	$tpl->display('dedi.tpl');
	$tpl->display('footer.tpl');
?>
