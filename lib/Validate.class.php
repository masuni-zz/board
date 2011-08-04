<?php

class Validate {
	public $errmsg;

	public function insertCheck($param) {
		if (empty($param['user_name']) === true) {
			return 'nameを入力してください';
		}
		if (empty($param['body']) === true) {
			return 'bodyを入力してください';
		}
		if (empty($param['user_password']) === true) {
			return 'パスワードを入力してください';
		} else {
			if (preg_match('/[^0-9a-zA-Z\-\_\\\.\!\?\,\+\=]/', $param['user_password'])) {
				return 'パスワードに使用できる文字列は半角英数字と一部記号（-_.!?,+=\）のみです';
			}
			if (strlen($param['user_password']) < 6 || strlen($param['user_password']) > 12) {
				return 'パスワードの長さは6文字以上12文字以内';
			}
		}
	}

	public function updateCheck($param) {
		if (preg_match('/\D/', $param['id'])) return '不正なID';
		if (empty($param['user_name']) === true) {
			return 'nameを入力してください';
		}
		if (empty($param['body']) === true) {
			return 'bodyを入力してください';
		}
	}
}
