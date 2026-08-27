<?php

class Index extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		//Auth::handleLogin();
	}
	
	public function index() {  
	    $this->view->title = "{$this->_company()['c_name']} | {$this->_company()['c_short_desc']}";
		$this->view->render('index/index');
	} 

	public function temp() {  
	    $this->view->title = 'Buy and Sell | '.$this->_company()['c_name'];
		$this->view->render('index/temp');
	} 



	
	
}