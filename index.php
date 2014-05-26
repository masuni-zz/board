<?php

require_once('/var/www/main/board/lib/Smarty/libs/Smarty.class.php');
require_once('/var/www/main/board/lib/DB.class.php');
require_once('/var/www/main/board/lib/Board.class.php');
require_once('/var/www/main/board/lib/Validate.class.php');

// Database接続
$db = new DB();
$dbh = $db->connect();
// 掲示板
$board = new Board($dbh);
$validate = new Validate();
// テンプレート
$smarty = new Smarty();
$smarty->template_dir = '/var/www/main/board/templates/';
$smarty->compile_dir  = '/var/www/main/board/templates_c/';
$smarty->config_dir   = '/var/www/main/board/configs/';
$smarty->cache_dir    = '/var/www/main/board/cache/';
$template = 'index.tpl';

$errmsg ='';
$data = '';


$param = $_REQUEST;
// insert
if ($param['insert']) {
	if (!$param['id']) {
		if (!$errmsg = $validate->insertCheck($param)) $result = $board->insert($param);
	} else {
		if (!$errmsg = $validate->updateCheck($param)) $result = $board->update($param);
	}
}
// edit
else if ($param['edit']) {
	if ($board->passCheck($param['id'], $param['user_password'])) {
		$data = $board->selectById($param['id']);
	} else {
		$errmsg = 'パスワードが違います';
	}
}
// delete
else if ($param['delete']) {
	if ($board->passCheck($param['id'], $param['user_password'])) {
		$result = $board->delete($param['id']);
	} else {
		$errmsg = 'パスワードが違います';
	}
}
// reply
else if ($param['reply']) {
	$data = $board->selectById($param['id']);
	$template = 'reply.tpl';
}


// 書き込み内容一覧
$list = $board->select();
foreach ($list as $key => $val) {
	$board->setParentId($val['id']);
	$r_list = $board->select();
	$list[$key]['reply'] = $r_list;
}


// Database接続解除
$db->disconnect($dbh); 


// 表示
$smarty->assign('DATA', $data);
$smarty->assign('LIST', $list);
$smarty->assign('ERRMSG', $errmsg);
$smarty->display($template);

function ticket003() {
    echo "ticket003\n";
}
