<?php

class Session
{
	
	public static function init() {
		@session_start();
	}
	
	public static function set(string $key, string $value) {
		$_SESSION[$key] = $value;
	}
	
	public static function get(string $key) {
		if (isset($_SESSION[$key]))
		return $_SESSION[$key];
	}
	public static function id() {
		if (isset($_SESSION['userid']))
		return $_SESSION['userid'];
	}
	
	public static function reset(string $key, string $value) {
		// unset first
		unset($_SESSION[$key]);
		// then set
		$_SESSION[$key] = $value;
	}
	
	public static function destroy() {
		unset($_SESSION);
		session_destroy();
	}
	
	
}