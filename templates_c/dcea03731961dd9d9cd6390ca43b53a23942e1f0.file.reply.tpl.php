<?php /* Smarty version Smarty-3.0.8, created on 2011-08-03 21:02:10
         compiled from "/var/www/main/board/templates/reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4406465204e3938c2efc238-42405518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcea03731961dd9d9cd6390ca43b53a23942e1f0' => 
    array (
      0 => '/var/www/main/board/templates/reply.tpl',
      1 => 1312372246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4406465204e3938c2efc238-42405518',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/main/board/lib/Smarty/libs/plugins/modifier.escape.php';
?><html>
<head>
<title>Boad</title>
<script type="text/javascript" language="javascript" src="./js/reply.js"></script>
</head>
<body>
<h1><a href="/board/">boad</a></h1>
<table border="1" cellspacing="0">
<tr><td>name</td><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('DATA')->value['name']);?>
</td></tr>
<tr><td>body</td><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('DATA')->value['body']);?>
</td></tr>
<tr><td>date</td><td><?php echo $_smarty_tpl->getVariable('DATA')->value['update_dt'];?>
</td></tr>
</table>
<hr />
<p id="errmsg"></p>
<form name="boad" action="./" method="post" onsubmit="return replyCheck()">
<input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->getVariable('DATA')->value['id'];?>
">
<table border='0'>
<tr><td>name</td><td><input type="text" name="user_name" size="20"></td></tr>
<tr><td>body</td>
<td>
<textarea name="body" rows="4' cols="10"></textarea>
</td>
</tr>
<tr><td>password</td> <td> <input type="password" name="user_password" size="20" maxlength="20"></td></tr>
<tr><td colspan="2" align="right"><input type="submit" name="insert" value="commit"></td></tr>
</table>
</form>
</body>
</html>
