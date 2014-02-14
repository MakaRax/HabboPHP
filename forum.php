<?php 
require 'init.php';
$count = ORM::for_table("habbophp_forum_threads")->count();
$page = isset($_GET['page']) ? $_GET['page'] : "0";
$per_page = 20;
$threads_pages = ceil($count / $per_page);
if($threads_pages < 0){
	$threads_pages = 0;
}
$query_min = ($page * 20);
$query_max = ($query_min + 20);
if($query_min < 0){
	$query_min = 0;
}
$query = ORM::for_table("habbophp_forum_threads")->raw_query('SELECT * FROM habbophp_forum_threads LIMIT '.$query_min.', '.$query_max.'')->find_many();
$tpl->assign("threads", $query);
$tpl->assign("page", $page);
$tpl->assign("pages", $threads_pages);
$html = "";
for($i = 1; $i <= $threads_pages; $i++){
	if($_GET['page'] == $i){
		$html .= $i."&nbsp;";
	} else {
		$html .= '<a href="forum.php?page='.$i.'" class="topiclist-page-link">'.$i.'</a>';
	}
}
$tpl->assign('pagination', $html);
$threads_list = ORM::for_table("habbophp_forum_threads")->find_many();
$tpl->assign('threads_array', $threads_list);
$tpl->display('header.tpl');
$tpl->display('forum.tpl');
$tpl->display('footer.tpl');
?>