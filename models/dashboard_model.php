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

    public function getTemplates() {
        return $this->_get('email_templates')[1];
    }
    
	 
	
// end of class	
}