<html>
<head>
<title>Boad</title>
</head>
<body>
<h1><a href="/board/">boad</a></h1>
<form name="boad" action="./" method="post">
{if $DATA}<input type="hidden" name="id" value="{$DATA.id}">{/if}
<table border='0'>
<tr><td>name</td><td><input type="text" name="user_name" size="20"{if $DATA} value="{$DATA.name}"{/if}></td></tr>
<tr><td>body</td>
<td>
<textarea name="body" rows="4' cols="10">{if $DATA}{$DATA.body}{/if}</textarea>
</td>
</tr>
{if !$DATA}<tr><td>password</td> <td> <input type="password" name="user_password" size="20" maxlength="20"></td></tr>{/if}
<tr><td colspan="2" align="right"><input type="submit" name="insert" value="commit"></td></tr>
</table>
</form>
<hr />
{if isset($ERRMSG)}<font color="red"><b>{$ERRMSG|escape}</b></font><br />{/if}
{if isset($LIST)}
{section name=board loop=$LIST}
<form name="message{$LIST[board].id}" action="./" method="post">
<input type="hidden" name="id" value="{$LIST[board].id}">
<table border="1" cellspacing="0">
<tr><td>name</td><td>{$LIST[board].name|escape}</td></tr>
<tr><td>body</td><td>{$LIST[board].body|escape}</td></tr>
<tr><td>date</td><td>{$LIST[board].update_dt}</td></tr>
<tr><td>passwd</td><td><input type="password" name="user_password" size="12" maxlength="12"><input type="submit" name="edit" value="edit"><input type="submit" name="delete" value="delete"></td></tr>
<tr><td colspan="2" align="right"><input type="submit" name="reply" value="reply"></td></tr>
</form>
{if $LIST[board].reply}
{section name=rep loop=$LIST[board].reply}
<form name="reply{$LIST[board].reply[rep].id}" action="./" method="post">
<input type="hidden" name="id" value="{$LIST[board].reply[rep].id}">
<table border="1" cellspacing="0">
<tr><td>name</td><td>{$LIST[board].reply[rep].name|escape}</td></tr>
<tr><td>body</td><td>{$LIST[board].reply[rep].body|escape}</td></tr>
<tr><td>date</td><td>{$LIST[board].reply[rep].update_dt}</td></tr>
<tr><td>passwd</td><td><input type="password" name="user_password" size="12" maxlength="12"><input type="submit" name="edit" value="edit"><input type="submit" name="delete" value="delete"></td></tr>
</table>
</form>
{/section}
{/if}

<br />

{/section}
{/if}

</body>
</html>
