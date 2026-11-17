<?php

class Dashboard extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {	
		Auth::handleLogin(); 
		$this->view->title = ' Dashboard | '.$this->_company()['c_name']; ; 
		$this->view->render('dashboard/index');
	} 
	
	
	public function newemail() {	
		Auth::handleLogin(); 
		$this->view->templates = $this->model->getTemplates();
		$this->view->title = ' New Email | '.$this->_company()['c_name']; ; 
		$this->view->render('dashboard/new-email');
	} 
    
	public function accountnumbers($id = 'card') {
	    Auth::handleLogin();
	   
	    $this->view->numbers = $this->model->AcntNumbers();
	     
	     
	    $this->view->title = ' Account Numbers | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/account-numbers');
	    
	} 
     
    public function logout() { 
      //  $this->model->removedevices();  
        Session::destroy();  
        echo "<script>document.cookie = 'remember=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';</script>";
        echo "<script>document.cookie = 'rkey=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';</script>";
        echo CustomFunctions::relocate('/');
    }

 
 
	

	// end of class

}