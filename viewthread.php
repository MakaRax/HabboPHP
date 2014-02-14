<?php 
require 'init.php';
// some code
if(!isset($_GET['id'])){
	header("Location: forum.php");
	die();
}
$id = (is_numeric($_GET['id'])) ? intval($_GET['id']) : $error;

$thread = ORM::for_table('habbophp_forum_threads')->where('id', safe($id, 'SQL'))->find_one();
$owner_messages = ORM::for_table('habbophp_forum_comments')->where('author_id', $author['id'])->count();
$comments = ORM::for_table('habbophp_forum_comments')
   ->join('users', array('habbophp_forum_comments.author_id', '=', 'users.id'))
   ->where('habbophp_forum_comments.thread_id', $id)
   ->find_many();
   print_r($join);
// End file
$tpl->assign('comments', $comments);
$tpl->assign('owner_messages', $owner_messages);
$tpl->assign('thread', $thread);
$tpl->display("header.tpl");
$tpl->display("forum_view.tpl");
$tpl->display("footer.tpl");