<?php /* Smarty version Smarty-3.0.8, created on 2011-08-02 14:58:51
         compiled from "/var/www/main/boad/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4861625524e37921b2190a8-80557805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '584975d9ce8db964fe6b38142271f4de55bfa4cb' => 
    array (
      0 => '/var/www/main/boad/templates/index.tpl',
      1 => 1312264717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4861625524e37921b2190a8-80557805',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
<title>Boad</title>
</head>
<body>
<h1>boad</h1>
<form name="boad" action="./" method="post">
<table border='0'>
<tr><td>name</td><td><input type="text" name="user_name" size="20"></td></tr>
<tr><td>body</td>
<td>
<textarea name="body" rows="4' cols="10">
</textarea>
</td>
</tr>
<tr><td>password</td>
<td>
<input type="password" name="user_password" size="12" maxlength="12">
<input type="submit" value="commit">
</td></tr>
</table>
</form>
</body>
</html>
