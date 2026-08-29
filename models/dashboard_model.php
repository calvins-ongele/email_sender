<?php   
 
class Dashboard_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	

    public function AcntNumbers() {
        $users = $this->_get('account_numbers ', '', [  ], 1, 'order by id desc ' )[1];
        
        return $users;
    }
    
	 
	
// end of class	
}