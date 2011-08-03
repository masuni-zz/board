<html>
<head>
<title>Boad</title>
<script type="text/javascript" language="javascript" src="./js/reply.js"></script>
</head>
<body>
<h1><a href="/board/">boad</a></h1>
<table border="1" cellspacing="0">
<tr><td>name</td><td>{$DATA.name|escape}</td></tr>
<tr><td>body</td><td>{$DATA.body|escape}</td></tr>
<tr><td>date</td><td>{$DATA.update_dt}</td></tr>
</table>
<hr />
<p id="errmsg"></p>
<form name="boad" action="./" method="post" onsubmit="return replyCheck()">
<input type="hidden" name="parent_id" value="{$DATA.id}">
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
