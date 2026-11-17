<?php
#[AllowDynamicProperties]
class Controller {

	function __construct() {
		// set defualt timezone some up;; affects the whole project
		date_default_timezone_set("Africa/Nairobi");
		Session::init();
	    $view_object = new View();
		$this->view = $view_object;

	}
	
	public function loadModel(string $name) {
		
		$path = 'models/'.$name.'_model.php';
		
		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}
		$this->view->_company = $this->model->_company();  
		$this->view->_me = $this->model->me(); 
		$this->view->version = CODE_VERSION;  
		$this->view->currentpage = 0;
		$this->view->pid = '';  
		$this->view->page_id = '';    
		$this->view->_me = $this->model->me();  
 
		
		$allowed_under_maintenance = ['admin', 'login'];
		if ($this->view->_company['enable_maintenance_mode']) {
			if (!in_array(CLASS_NAME, $allowed_under_maintenance)) 
				die($this->maintenance());
		}
		  
	} 



     
    public function categories() {
        return $this->model->categories();
    }    
    
	public function me() {
		return $this->model->me();
	}
	public function _company() {
		return $this->model->_company();
	}
  
		public function maintenance() {
		return ("
			<!doctype html>
			<head>
				<title>Site Maintenance</title>
				<style>
				article { display: block; text-align: left; width: 650px; margin: 0 auto; }
				a { color: #dc8100; text-decoration: none; }
				a:hover { color: #333; text-decoration: none; }
				article h1, article div{
				color:black
				}
				.center {
				display: flex;
				justify-content: center;
				align-items: center;
				text-align: center;
				min-height: 100vh;
				}
				</style>
				<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'  > 
				</head>

				<body style='background-image:url(/public/assets/system/mainetanance.png);

				background-attachment: fixed;
						/*background-position: center;*/
						background-repeat: no-repeat;
						background-size: cover;
				'>
				<div class='center'>
				<article class=' ' style='background:rgba(255,250,250,0.7); border-radius:6px; padding:15px;' align='center'>
					<h1>We&rsquo;ll be back soon!</h1><br>
					<div style='font-size:25px'>
						<p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always 
						<a href='mailto:{$this->view->_company['c_email']}'>contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
						<p style='font-size:40px'>&mdash; {$this->view->_company['c_name']}</p>
					</div><br>
				</article>
				</div>
				</body>
			
			");
	}
	public function notFound() {
		//http_response_code(404);
		$this->view->hstyles = array();
		$this->view->_company = array('c_name'=>$_SERVER['SERVER_NAME'], 'c_logo'=>'1.png', 'c_tel'=>'07');//$this->_company();
		$this->view->title = '404 Error'; 
		$this->view->render('err/index', true); 
	}
   
  





	
}
