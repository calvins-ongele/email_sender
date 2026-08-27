<?php

use Dompdf\Dompdf;

class MyApp_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	 
	public function processlogin() {
	    		
		$data = $this->_get('users', 'user_email, user_status', [$_POST['email'], 'Active' ], false);
		
		if ($data[0] == 0) die($this->_ms(true, "Incorrect details")); // user not found
        
		    $data = $data[1];

			if (password_verify($_POST['pass1'], $data['user_pass'])) {
				// login
				Session::init();
				Session::set('role', $data['user_role']);
				Session::set('loggedIn', true);
				Session::set('userid', $data['user_ID']);
				Session::set('email', $data['user_email']); 
				Session::set('fname', $data['user_fname']);   
    			Session::set('phone', $data['user_tel']); 
    			Session::set('myaff', $data['user_aff_code']); 
    			Session::set('url', $data['user_url']); 
    			Session::set('name', $data['user_fname']  );
				//Session::set('fname', ucfirst(explode(" ", $data['user_names'])[0]));
			//	Session::set('staffcontract', $data['user_staff_contract']);
			$key = CustomFunctions::randchars(40);
				Session::set('key', $key); 
			$this->_update('users', 'user_key_web', 'user_email', [$key, $_POST['email'] ]);
			 
				
				$time = time();
				$md = md5( $time );
				$ua = $_SERVER['HTTP_USER_AGENT'];
				// update last login date 
			    if (isset($_POST['remember'])) {
			        //$this->_insert('user_devices', 'ud_userid, ud_key, ud_user_agent', [$data['user_ID'],$md,$ua ] );
		            //$this->_update('users', 'user_last_login, user_cookie_pass', 'user_email', [$time, $time, $_POST['email']]);
			        //Session::set('remember', $data['user_ID'] );
			        Session::set('rkey', $md );
			    }
			    
			    if (isset($_POST['form'])) {
			        die(json_encode( ['error'=>'false', 'msg'=>'success', 'id'=>$data['user_ID'] ] ));
			    }
					
                $this->log("{$data['user_email']} logged into the system at " . date('Y-m-d, H:i:s') ."| <br> {$_SERVER['HTTP_USER_AGENT']}", 'Account' );
		
					$direction = "/dashboard";
					
					$await_login = Session::get('await_login') != null ? Session::get('await_login') : $direction; 
                    die($this->_ms(false, CustomFunctions::relocate($await_login, true)));
                    
			} else die($this->_ms(true, "Incorrect details")); // wrong password
			 
	}
	  
     
 
	 
	 
	
	public function editcompany1() { 
        //$me = $this->_get('company', 'c_ID', [1], false)[1];
        if (empty($_POST['value'])) exit($this->_ms(true, "<span class='text-danger'>Empty data cannot be saved</span>"));
 
        $more = '';
        
		
		$b = $this->_update('company', $_POST['col'], 'c_ID', [$_POST['value'],  1]);
		echo $this->_ms(false, "<span class='text-success'>".json_decode($b)->msg."</span>");
        
        $this->log( Session::get('email') . " edited the company details. Edited {$_POST['col']}  on " . date('Y-m-d, H:i:s'), 'Settings' );
	}
	public function edituser() { 
        //$me = $this->_get('users', 'user_ID', [Session::get('userid')], false)[1];
        if (empty($_POST['val'])) exit($this->_ms(true, "<span class='text-danger'>Empty data cannot be saved</span>"));
        
        if ( ($_POST['col'] == 'user_email') ) { //&& ( $this->me()['user_email_verified'] != 0 ) ) {
            exit($this->_ms(true, "<span class='text-danger'>You must contact support to change a verified email.</span>"));
        }
 
        $more = '';
        
		
		if ($_POST['col'] != 'user_bio')
		$b = $this->_update('users', $_POST['col'], 'user_ID', [$_POST['val'],  Session::get('userid')]);
		else
		$b = $this->_update('user_moredetails', $_POST['col'], 'user_ID', [$_POST['val'],  Session::get('userid')]);
		echo $this->_ms(false, "<span class='text-success'>".json_decode($b)->msg."</span>");
        
        $this->log( Session::get('email') . " edited their bio details. Edited {$_POST['col']}  on " . date('Y-m-d, H:i:s'), 'Settings' );
	}
	
    public function changepass() {  
        
        $me = $this->_get('users', 'user_ID', [Session::get('userid')], false)[1];
        
            if (isset($_POST['pin'])) {
                if ($_POST['pass1'] != $_POST['pass']) exit($this->_ms(true, "<span class='text-danger'>New pin and repeat pin must match!</span>"));
                
                if (strlen($_POST['pass1']) < 4 ) { //(!is_numeric($_POST['pass1']) ) {
                    die($this->_ms(true, "Pin must be a numeric number of 4 characters."));
                }
    
    
            if ( password_verify($_POST['oldpass'], $me['user_pin']) || (empty($me['user_pin'])) ) {
                // update
                $this->log( Session::get('email') . " changed their pin on " . date('Y-m-d, H:i:s'), 'Settings' );
                $expires = time() + (60 * 86400);
                $this->_update('users', 'user_pin', 'user_ID', [ password_hash($_POST['pass1'], PASSWORD_DEFAULT), Session::get('userid') ]);
               exit($this->_ms(false, "<span class='text-success'>Success. New pin saved</span>"));
            }
            exit($this->_ms(true, "<span class='text-danger'>Incorrect current pin!</span>"));
            return;
        }

        if ($_POST['pass1'] != $_POST['pass']) exit($this->_ms(true, "<span class='text-danger'>New password and repeat password must match!</span>"));


        if ( password_verify($_POST['oldpass'], $me['user_pass']) ) {
            // update
            $this->log( Session::get('email') . " changed their password on " . date('Y-m-d, H:i:s'), 'Settings' );
            $expires = time() + (60 * 86400);
            $this->_update('users', 'user_pass', 'user_ID', [ password_hash($_POST['pass1'], PASSWORD_DEFAULT), Session::get('userid') ]);
           exit($this->_ms(false, "<span class='text-success'>Success. New password saved</span>"));
        }
        exit($this->_ms(true, "<span class='text-danger'>Incorrect current password!</span>"));

     }
     
       
	  
	public function send_email() {
		
		if (!CSRF::isVerified($_POST['csrf_token'] ?? '')) {
			echo $this->_ms(true, "Invalid CSRF token. Please refresh the page and try again.", '',403);
			return;
		}

		try {
			$this->sendTheEmail($_POST['subject']??"", $_POST['email']??"", $_POST['msg_body']??"", $_POST['reply_id'] );

			echo $this->_ms(0, "Email sent successfully");
		} catch(Exception $e) {
			echo $this->_ms(1, "Email sending failed.");//. $e->getMessage());
		}

		 
	}
        
         

	
// end of class	
}
