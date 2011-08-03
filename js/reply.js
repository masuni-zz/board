function replyCheck() {
	if (document.boad.user_name.value == "") {
		document.getElementById('errmsg').innerHTML = '<font color="red"><b>nameを入力してください</b></font>'
		return false;
	}
	if (document.boad.body.value == "") {
		document.getElementById('errmsg').innerHTML = '<font color="red"><b>bodyを入力してください</b></font>'
		return false;
	}
	if (document.boad.user_password.value == "") {
		document.getElementById('errmsg').innerHTML = '<font color="red"><b>パスワードを入力してください</b></font>'
		return false;
	}
	//if (document.boad.user_password.value.match(/[^0-9a-zA-Z\-_\\\.\!\?,\+\=]/) {
	//	document.getElementById('errmsg').innerHTML = '<font color="red"><b>パスワードに使用できる文字列は半角英数字と一部記号（-_.!?,+=\\）のみです</b></font>'
	//	return false;
	//}
	if (document.boad.user_password.value.length < 6 || document.boad.user_password.value.length > 12) {
		document.getElementById('errmsg').innerHTML = '<font color="red"><b>パスワードの長さは6文字以上12文字以内</b></font>'
		return false;
	}
	return true;
}
