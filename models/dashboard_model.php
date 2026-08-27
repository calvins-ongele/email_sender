<?php  

use Dompdf\Dompdf;
 
class Dashboard_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	

    public function getrefusers() {
        $users = $this->_get('users ', 'user_ref_by', [ Session::get('myaff') ], 1, ' limit 200' )[1];
        
        return $users;
    }
        
	public function totposts($status ) {
	    if ($status == 'all' ) { 
    		return $this->_getmore('blog', 'count(b_ID)', '', []);
	    }
	    if ($status == 'celeb') { 
    		return $this->_getmore('celebrity', 'count(c_ID)', '', []);
	    }
	    if ($status == 'content') { 
    		return $this->_getmore('celeb_content', 'count(cc_ID)', '', []);
	    }
	      if ($status == 'external') { 
    		return $this->_getmore('dynamics', 'count(d_ID)', '', []);
	    }
	   if ($status == 'links') { 
    		return $this->_getmore('quicklinks', 'count(ql_ID)', '', []);
	    }
	   if ($status == 'contact') { 
    		return $this->_getmore('contactus', 'count(cus_ID)', '', []);
	    }
	
    	return $this->_getmore('blog', 'count(b_ID)', 'b_status', [ $status ]);
	} 
	
  
	
	public function list_accounts_cards() {   
	    $accounts = $this->_get('accounts', 'a_account_owner, a_status', [ Session::get('userid'), 'Active' ]  )[1]; 
      
          $output = array();
          foreach ($accounts as $row) {
             $output[] = ['acc'=>$row['a_account_number'], 'bal'=>$row['a_account_balance'], 'cur'=>$row['a_account_currency'], 'name'=>$row['a_accountname'], 
             'date'=>$row['a_account_date'], 'set_type'=>$row['a_settlement_type'] ];
          }
          
          return $output;
	}
    public function getlogs($max) {  
        return $this->_get('logs left join users on l_by = user_ID ', 'l_by', [ Session::get('userid') ], true, " order by l_ID desc limit $max" )[1];
    }
	public function getproducts() {

		if (!empty($_GET['id'])) {
			return $this->_get('products', 'id',  [ $_GET['id']  ],0 )[1];
		}
		
	    $products = $this->_get('products', 'p_user_fk',  [ Session::get('userid') ],1,"order by id desc {$this->pagination()}")[1];

		return [
			'products'=>$products,
			'count'=>$this->_get('products', 'p_user_fk',  [ Session::get('userid') ])[0]
		];
	}
 
	 
	public function getorders($status) {
	    return $this->_get('orders left join products on p_url = order_product_url', 'p_user_fk, order_status', [Session::get('userid'),$status])[1];
	}
	
	
	public function getpurchases($status) {
	    return $this->_get('orders left join products on p_url = order_product_url left join users on p_user_fk=user_ID', 'order_buyer_fk, order_status',
	    [Session::get('userid'),$status])[1];
	}
	 
	
	  
	 
	
// end of class	
}