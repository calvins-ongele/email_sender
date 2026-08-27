<?php

class MyApp extends Controller {
    
	public function __construct() {
		parent::__construct(); 
	}
	 
	public function processlogin(){ $this->model->processlogin(); }
	 
   	
    public function requests() { 
            $method = $_POST['method'] ?? ''; 
            try {
                $this->model->$method();
            } catch(Exception $e) {
                http_response_code(500);
                file_put_contents('logs/Admin.Api.log', json_encode($e), FILE_APPEND);
                echo json_encode(['error'=>true, 'msg'=>'Something fatally went wrong!']);
            }
    }
	
	
	
	
	
   // end of class
}