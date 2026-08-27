<?php

class Dashboard extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {	
		Auth::handleLogin();
	   // $this->view->charity = $this->model->getservicesaccounts();
		$this->view->title = ' Dashboard | '.$this->_company()['c_name']; ; 
		$this->view->render('dashboard/index');
	} 
	
    
	public function deposit($id = 'card') {
	    Auth::handleLogin();
	   
	    $this->view->accounts = $this->model->list_accounts_cards();
	    
	    if ($id == 'card' ) {
	        $this->view->categories = $this->model->categories();
		    $this->view->title = ' Deposit money by Card | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/deposit/pesapal');
		    return;
	    }
	    
	    //$this->view->data = $this->model->getproducts();
	    $this->view->title = ' Deposit money by Mpesa | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/deposit/mpesa');
	    
	}
	public function mybalances() {
		Auth::handleLogin();	
	    $this->view->accounts = $this->model->list_accounts_cards();   
		$this->view->title = ' Your account balances | '.$this->_company()['c_name']; ; 
		$this->view->render('dashboard/balances');
	}  
	public function disburse($uri = '') {
		Auth::handleLogin();
	    if (empty($uri)) {
	        CustomFunctions::relocate('/dashboard'); return;
	    }
	      
	    $this->view->myaccount = $this->model->myaccount();
	    $this->view->data = $this->model->getdisbursedata($uri);
	    $this->view->title = "Disburse funds to {$this->view->data['s_nominated_name']} | {$this->_company()['c_name']}";
	    $this->view->render('dashboard/disburse/index');
	    
	}
	public function products($id = 'view', $id2 = '') {
		Auth::handleLogin();
	    
	    if ($id == 'create' ) {
	        $this->view->categories = parent::categories();
		    $this->view->title = ' New Products | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/products/new');
		    return; 
	    }
	    
	    if ($id == 'edit' ) {
	        $this->view->categories = $this->model->categories();
	        $this->view->data = $this->model->getproducts();
		    $this->view->title = ' Edit Listing | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/products/edit');
		    return;
	    }
	    
	    $this->view->data = $this->model->getproducts();
	    $this->view->title = ' View Listing | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/products/view');
	    
	}
	  
	public function cardpayment() {	
		Auth::handleLogin();
	    $this->view->accounts = $this->model->list_accounts_cards();   
		$this->view->title = ' Pay/deposit with Paypal | '.$this->_company()['c_name']; ; 
		$this->view->render('dashboard/deposit/cardpayment');
	}
	public function content($id = 'videos', $videouri = '') {
		Auth::handleLogin();
	    
	    if ($id == 'new' ) { 
		    $this->view->title = 'Upload Videos | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/content/new');
		    return;
	    }
	    if ($id == 'blog') {
	        if ($videouri == 'new') {
	            
    		    $this->view->title = 'New Blog | '.$this->_company()['c_name']; ; 
    		    $this->view->render('dashboard/content/newblog');
    		    return;
	        }
	        
            $this->view->data = $this->model->getblogaccounts();
		    $this->view->title = 'My Blog Posts | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/content/blog');
	        return;
	    }
	    if ($id == 'live' ) { 
	        if (empty($videouri)) {
	            $this->view->products = $this->model->getproducts();
	            $this->view->services = $this->model->getservicesaccounts();
    		    $this->view->title = 'Go Live | '.$this->_company()['c_name']; ; 
    		    $this->view->render('dashboard/content/create-live');
    		    return;
	        }
	        
		    $this->view->videodata = $this->model->videodata($videouri);  
		    $this->view->attachment = $this->model->vidattachment( $this->view->videodata );  
		    $this->view->title = "[{$this->view->videodata['v_channel']}] - {$this->view->videodata['v_title']} | {$this->_company()['c_name']}" ; 
    		$this->view->render('dashboard/content/live');
		    return;
	    }
	    if ($id == 'edit' ) { 
	        $this->view->data = $this->model->getvideos($_GET['vid'] ?? '');
		    $this->view->title = 'Edit Video | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/content/edit');
		    return;
	    }
	    
	    $this->view->data = $this->model->getvideos();
	    $this->view->title = ' New Listing | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/content/videos');
	    
	}
	public function bids($id = 'earnings', $url = '') {
		Auth::handleLogin();
	    
	    if ($id == 'bids' ) {
	        
	        $this->view->data = $this->model->bidproduct($url);
		    $this->view->title = ' Select Bids | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/bids/index');
		    return;
	    }
	    
	    $this->view->data = $this->model->getadearnings();
	    $this->view->title = ' Earnings | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/bids/earnings');
	    
	}
	public function orders($id = 'new') {
		Auth::handleLogin();
	    
	    if ($id == 'new' ) {
	        
	        $this->view->data = $this->model->getorders('Pending');
		    $this->view->title = ' New Orders | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/orders/new');
		    return;
	    }
	    
	    $this->view->data = $this->model->getorders('Completed');
	    $this->view->title = ' Completed Orders | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/orders/completed');
	    
	}
	public function withdraw($id = 'new') {
		Auth::handleLogin();
	    $this->view->accounts = $this->model->list_accounts_cards(); 
	    
	    if ($id == 'new' ) {
	         
		    $this->view->title = ' Withdraw Money to Mpesa | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/withdraw/index');
		    return;
	    }  
	    if ($id == 'forgotpin' ) {
	         
		    $this->view->title = 'Reset withdraw pin | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/withdraw/forgot-pin');
		    return;
	    }
	    
	    $this->view->data = $this->model->getwithdraw('Completed');
	    $this->view->title = ' Completed Withdrawals | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/withdraw/all');
	    
	}

	public function history($type = ""/**dr or cr */, $status = 'Completed') { 
	    $this->view->data = $this->model->getwithdraw($type, $status);
	    $this->view->title = ' Completed Withdrawals | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/withdraw/all');
	}
    
	public function purchases($id = 'pending', $rate = '', $uri = '') {
		Auth::handleLogin();
	    
	    if ($id == 'pending' ) {
	        
	        $this->view->data = $this->model->getpurchases('Pending');
		    $this->view->title = ' New Orders | '.$this->_company()['c_name']; ; 
		    $this->view->render('dashboard/purchases/new');
		    return;
	    }
	    
	    if (!empty($rate)) {
	        $this->view->data = $this->model->getproduct($uri);
	        $this->view->title = ' Rate your Purchase | '.$this->_company()['c_name']; ; 
	        $this->view->render('dashboard/purchases/rate');
	        return;
	    }
	    
	    $this->view->data = $this->model->getpurchases('Completed');
	    $this->view->title = ' Completed Purchases | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/purchases/completed');
	    
	}
	
    
	public function salo($id = 'pending', $rate = '', $uri = '') {
		Auth::handleLogin();
	    
	    $this->view->emps = $this->model->getEmps(); 
	    $this->view->data = $this->model->getSaloStatus('');
	    $this->view->title = ' Salo Management | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/salaries/index');
	    
	}
	public function promote($id = 'pending', $rate = '', $uri = '') {
		Auth::handleLogin();
	    
	    $this->view->emps = $this->model->getEmps(); 
	    $this->view->data = $this->model->getSaloStatus('');
	    $this->view->title = ' Promote Account | '.$this->_company()['c_name']; ; 
	    $this->view->render('dashboard/promote/index');
	    
	}
	
	public function contributors($uri = '') {
		Auth::handleLogin();
	    $this->view->uri = $uri;
	    $this->view->data = $this->model->getcontributors($uri);
        $this->view->title = 'Contributors Letter | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/disburse/contributors');
	}
 
	public function event($uri = '') {
		Auth::handleLogin();
	    $this->view->uri = $uri;
	    $this->view->data = $this->model->events_variations($uri);
        $this->view->title = 'Event variations | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/disburse/events_variations');
	}
    public function profile() {   
		Auth::handleLogin();
        $this->view->refusers = $this->model->getrefusers();
        $this->view->me = $this->me();
        $this->view->title = 'My profile settings | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/settings/profile');
    } 
    
    public function logs() {    
		Auth::handleLogin();
        $this->view->me = $this->me();
        $this->view->logs = $this->model->getlogs(150);
        //$this->view->employees = $this->model->getemployees(150);
        $this->view->title = 'My profile settngs | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/settings/logs');
    }
    public function changepass() {  
		Auth::handleLogin(); 
        $this->view->me = $this->me();
      //  $this->view->all_devices = $this->model->all_devices();
        $this->view->title = 'Change password | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/settings/changepass');
    }
    public function changepin() {   
		Auth::handleLogin();
        $this->view->me = $this->me();
      //  $this->view->all_devices = $this->model->all_devices();
        $this->view->title = 'Change Pin | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/settings/changepin');
    }
 
 
    public function users($action = 'all') { 
		Auth::handleLogin();
        $this->view->users = $this->model->users();  
        $this->view->me = $this->me();
        
        
        if ($action == 'new') {
            
            $this->view->title = ' New User | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/staff/new');
            return;
        }
        
        
        $this->view->title = ' Users | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/staff/view');
    }
	
    public function features($action = 'bedrooms') {   
        $this->view->nots = [0, array()];
        $this->view->_company = $this->_company(); 
        $this->view->me = $this->me();
        $this->view->bedrooms = $this->model->bedrooms();
        $this->view->spfeatures = $this->model->spfeatures();
        $this->view->htype = $this->model->housetypes();
        $this->view->houses = $this->model->houses();
        
        if ($action == 'bedrooms') {
            
            $this->view->title = 'Bedrooms | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/features/bedrooms');
            return;
        }
        if ($action == 'housetypes') { 
            
            $this->view->title = 'House Types | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/features/housetypes');
            return;
        }
        $this->view->title = 'Special Features | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/features/spfeatures');
    }
	
	public function propertylistings($action = 'add') {   
        $this->view->nots = [0, array()];
        $this->view->_company = $this->_company(); 
        $this->view->me = $this->me();
        $this->view->bedrooms = $this->model->bedrooms();
        $this->view->spfeatures = $this->model->spfeatures();
        $this->view->htype = $this->model->housetypes();
        $this->view->houses = $this->model->houses(); 
        $this->view->building = $this->model->buildings();
        
         
        if ($action == 'newbuilding') {
            
            $this->view->title = 'Add New Building | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/property-listings/newbuilding');
            return;
        }
        
        if ($action == 'newhouse') { //adding individual house
            
            $this->view->title = 'Add New House | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/property-listings/newhouse');
            return;
        }
        if ($action == 'viewbuildings') { //adding individual house
            
            $this->view->title = 'View Buildings | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/property-listings/viewbuildings');
            return;
        }
        if ($action == 'indiv-house') { //adding individual house 
            
            $this->view->idvhouse = $this->model->idvhouse();
            $this->view->title = 'View Houses | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/property-listings/indiv-house');
            return;
        }
        if ($action == 'add') {
            
            $this->view->title = 'Add Listing | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/property-listings/addlisting');
            return;
        }
        if ($action == 'terms') {
            
            $this->view->building = $this->model->getbuilding($_GET['id']);
            $this->view->title = 'Terms & Conditions | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/property-listings/terms');
            return;
        }
        $this->view->title = 'View Listing | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/property-listings/viewlisting');
    }

	
    public function categories($action = 'View') {      
        $this->view->title = ' Categories | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/categories/index');
        return;
       
         
        
    }
    
 
    public function others($action = 'occupanyc', $id = '') {  
         
        $this->view->_company = $this->_company(); 
        $this->view->me = $this->me();
		$this->view->msg = $this->model->contacts('', $id);
  
        
        if ($action == 'occupancy') {  
            $this->view->buildings = $this->model->getbuidings(); 
            $this->view->title = ' Occupancy Rate | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/others/occupancy');
            return;
        }
        
        if ($action == 'booking') {
            $this->view->booking = $this->model->getbooking($id); 
            $this->view->title = $this->view->msg[1]['building_name']??"Building" . ' | ' . $this->_company()['c_name'];
            $this->view->render('dashboard/others/booking');
            return;
        }
 
         
         //run
        $this->view->bookings = $this->model->getActiveBookings();
        $this->view->title = ' Bookings for View | ' . $this->_company()['c_name'];
        $this->view->render('dashboard/others/bookings');
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