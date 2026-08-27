<?php

class Err extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
	}
	
	function index() { 
        $this->notFound();
	}

}
