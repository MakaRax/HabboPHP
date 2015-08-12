<?php

#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|         HABBOPHP - http://habbophp.com                                 #|
#|         Copyright © 2012 Arne.             All rights reserved.        #|
#|																		  #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

require 'init.php';

$tpl->assign('groups','community');
$tpl->assign('selected','selected');
$tpl->display('header.tpl');


//Rank list
// Adding new ranks : array('Nom' => 'RANK NAME' , 	'Rank' => 'RANKID' , 'Couleur' => 'COLOUR'), inside the $rank array.

$rank = array(
	array('Nom' => 'Administrator' , 	'Rank' => '7' , 'Couleur' => 'blue'),
	array('Nom' => 'Manager' , 	'Rank' => '6' , 'Couleur' => '#000'),
	array('Nom' => 'Administrator' , 		'Rank' => '5' , 'Couleur' => 'red')
); 

foreach($rank as $ranks){ $minRanks[] = $ranks['Rank'] ; } //Creating ranks array
array_multisort($minRanks,SORT_NUMERIC); // Ordering all ranks
$query = ORM::for_table("users")->where_raw("rank>=".intval($minRanks[0])."")->find_many();
$tpl->assign('user_info',$query);
$tpl->assign('rank',$rank);

/////////////////////////////////////////////////
// Display
/////////////////////////////////////////////////

$tpl->display('staff.tpl');
$tpl->display('footer.tpl');

?>
