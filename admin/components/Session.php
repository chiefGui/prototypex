<?php

class Session {
	public function __construct() {
		session_start();
	}

	public function register($key, $value) {
		$_SESSION[$key] = $value;
	}

	public function destroy() {
		session_destroy();
	}

	public function get($value) {
		return $_SESSION[$value];
	}
}