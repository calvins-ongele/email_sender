<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
		//email verification
	public function emailverify($email, $token) {
	   
	    $error = false;
	    
	    if (empty($email) || empty(strip_tags($token))) {
	        return "<p class='alert-danger alert mt-n2'> We could not verify your email. Contact us.</p> </div>";
	        $error = true;
	    }
	    if (!CustomFunctions::validEmail($email)) {
	        return "<p class='alert-danger alert mt-n2'> We could not verify your email. Contact us.</p> </div>";
	        $error = true;
	    }

    	if ($error == false) {
    	    	$sql = "SELECT ev_token FROM email_verification WHERE ev_email = ?";
        		$stmt = $this->connection()->prepare($sql);
        		$stmt->execute([$email]);
        		
        		$data = $this->_get('email_verification', 'ev_email', [$email], false);
        		
        		if ($data[0] == 0)  return "<p class='alert-danger alert mt-n2'> We could not verify your email. Contact us.</p> </div>";
        	 
    		    $db_token = $data[1]['ev_token'];
    
        		if ($db_token == strip_tags($token)) {
         
    			    $this->_update('users', 'user_status', 'user_email', ["Active", $email] );
    				 
    				$this->_delete('email_verification', 'ev_email', [$email] );
    
    				return "<p class='alert-success alert mt-n2'> Verification is successful! You can login.</p> </div>"; 
        			
        			
        		} else return "<p class='alert-danger alert mt-n2'> We could not verify you. Contact us. </p> </div>";
        		
    	    
    	}

	}


   public function posauto($id) {
       
	    $expires = time() - (10 * 3600);
		$data = $this->_get('users', 'login_id, login_id_updated_at > ', [$id, $expires ], false); 
		  
		
		if ($data[0] == 0) {
		    $m = urlencode("Login link has expired. Please retry.");
		    CustomFunctions::relocate("/login?error=$m");
		    die;
		}
        
		$data = $data[1];
		 
		// login
		Session::init();
		Session::set('role', $data['user_role']);
		Session::set('loggedIn', true);
		Session::set('userid', $data['user_ID']);
		Session::set('email', $data['user_email']); 
		Session::set('fname', $data['user_fname']); 
		Session::set('lname', $data['user_lname']);  
		Session::set('phone', $data['user_tel']); 
		Session::set('myaff', $data['user_aff_code']); 
		Session::set('url', $data['user_url']); 
		Session::set('name', $data['user_fname'] . ' ' . $data['user_lname'] );
		//Session::set('fname', ucfirst(explode(" ", $data['user_names'])[0]));
    	//	Session::set('staffcontract', $data['user_staff_contract']);
    	$key = CustomFunctions::randchars(40);
    		Session::set('key', $key); 
    	$this->_update('users', 'user_key_web', 'user_email', [$key, $_POST['email'] ]);
    	 
		
		$time = time();
		$md = md5( $time );
		$ua = $_SERVER['HTTP_USER_AGENT'];
	
	    
			
        $this->log("{$data['user_email']} logged into the system at " . date('Y-m-d, H:i:s') ."| <br> {$_SERVER['HTTP_USER_AGENT']}", 'Account' );
 
		$await_login = '/dashboard/withdraw'; 
        CustomFunctions::relocate($await_login, 0);
                    
		 
   }
 
// end of class	
}