<?php

class Auth {
	public static function Login($dest = null){
		@session_start();
		if ((!isset($_SESSION['loggedIn'])) || ($_SESSION['loggedIn'] != true) ) {
			session_destroy();

			if ($dest == '') CustomFunctions::relocate('/'); 
			else CustomFunctions::relocate('/' . $dest); 
			exit;
		}

		@session_start();
		$logged = (Session::get('loggedIn') != null) ? true : false;
		if ($logged == false) {
			Session::destroy();
			if ($dest == '') CustomFunctions::relocate('/'); 
			else CustomFunctions::relocate('/' . $dest); 
			exit;
		}
	}

	 
	public static function handleLogin() {
		@session_start();
		if (isset($_COOKIE['tkuvn'])) {
			CustomFunctions::relocate('/account/auth/' .  $_SERVER["REQUEST_URI"]);
		} else {
			if (Session::get('userid') == null) {
				session_destroy();
				@session_start();
				Session::set('await_login', $_SERVER["REQUEST_URI"]);
				CustomFunctions::relocate('/');
				exit;
			}

			Session::init();
			if (Session::get('userid') == null) {
				Session::destroy();
				@session_start();
				Session::set('await_login', $_SERVER["REQUEST_URI"]);
				CustomFunctions::relocate('/');
				exit;
			}
		}
	}


	
	public static function handleLoginAdmin() { 
		  
		Session::init(); 
	 
		if (empty(Session::get('role')) || Session::get('role') != 'Admin') {
			Session::destroy();
			Session::initialize();
			CustomFunctions::relocate('/');
			exit;
		}
		 
	}


	

}