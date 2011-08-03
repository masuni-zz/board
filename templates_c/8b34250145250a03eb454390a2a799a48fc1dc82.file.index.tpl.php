<?php /* Smarty version Smarty-3.0.8, created on 2011-08-03 19:51:38
         compiled from "/var/www/main/board/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2864318434e39283aac52e8-84296218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b34250145250a03eb454390a2a799a48fc1dc82' => 
    array (
      0 => '/var/www/main/board/templates/index.tpl',
      1 => 1312367980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2864318434e39283aac52e8-84296218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/main/board/lib/Smarty/libs/plugins/modifier.escape.php';
?><html>
<head>
<title>Boad</title>
</head>
<body>
<h1><a href="/board/">boad</a></h1>
<form name="boad" action="./" method="post">
<?php if ($_smarty_tpl->getVariable('DATA')->value){?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('DATA')->value['id'];?>
"><?php }?>
<table border='0'>
<tr><td>name</td><td><input type="text" name="user_name" size="20"<?php if ($_smarty_tpl->getVariable('DATA')->value){?> value="<?php echo $_smarty_tpl->getVariable('DATA')->value['name'];?>
"<?php }?>></td></tr>
<tr><td>body</td>
<td>
<textarea name="body" rows="4' cols="10"><?php if ($_smarty_tpl->getVariable('DATA')->value){?><?php echo $_smarty_tpl->getVariable('DATA')->value['body'];?>
<?php }?></textarea>
</td>
</tr>
<?php if (!$_smarty_tpl->getVariable('DATA')->value){?><tr><td>password</td> <td> <input type="password" name="user_password" size="20" maxlength="20"></td></tr><?php }?>
<tr><td colspan="2" align="right"><input type="submit" name="insert" value="commit"></td></tr>
</table>
</form>
<hr />
<?php if (isset($_smarty_tpl->getVariable('ERRMSG',null,true,false)->value)){?><font color="red"><b><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('ERRMSG')->value);?>
</b></font><br /><?php }?>
<?php if (isset($_smarty_tpl->getVariable('LIST',null,true,false)->value)){?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['board']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['name'] = 'board';
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('LIST')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['board']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['board']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['board']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['board']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['board']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['board']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['board']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['board']['total']);
?>
<form name="message<?php echo $_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['id'];?>
" action="./" method="post">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['id'];?>
">
<table border="1" cellspacing="0">
<tr><td>name</td><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['name']);?>
</td></tr>
<tr><td>body</td><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['body']);?>
</td></tr>
<tr><td>date</td><td><?php echo $_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['update_dt'];?>
</td></tr>
<tr><td>passwd</td><td><input type="password" name="user_password" size="12" maxlength="12"><input type="submit" name="edit" value="edit"><input type="submit" name="delete" value="delete"></td></tr>
<tr><td colspan="2" align="right"><input type="submit" name="reply" value="reply"></td></tr>
</form>
<?php if ($_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['reply']){?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['name'] = 'rep';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['reply']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rep']['total']);
?>
<form name="reply<?php echo $_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['reply'][$_smarty_tpl->getVariable('smarty')->value['section']['rep']['index']]['id'];?>
" action="./" method="post">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['reply'][$_smarty_tpl->getVariable('smarty')->value['section']['rep']['index']]['id'];?>
">
<table border="1" cellspacing="0">
<tr><td>name</td><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['reply'][$_smarty_tpl->getVariable('smarty')->value['section']['rep']['index']]['name']);?>
</td></tr>
<tr><td>body</td><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['reply'][$_smarty_tpl->getVariable('smarty')->value['section']['rep']['index']]['body']);?>
</td></tr>
<tr><td>date</td><td><?php echo $_smarty_tpl->getVariable('LIST')->value[$_smarty_tpl->getVariable('smarty')->value['section']['board']['index']]['reply'][$_smarty_tpl->getVariable('smarty')->value['section']['rep']['index']]['update_dt'];?>
</td></tr>
<tr><td>passwd</td><td><input type="password" name="user_password" size="12" maxlength="12"><input type="submit" name="edit" value="edit"><input type="submit" name="delete" value="delete"></td></tr>
</table>
</form>
<?php endfor; endif; ?>
<?php }?>

<br />

<?php endfor; endif; ?>
<?php }?>

</body>
</html>
