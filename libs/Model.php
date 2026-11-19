<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

#[AllowDynamicProperties]
class Model extends Database { 

    // this is the main model,, all others are sub
    // main function is to pass the database connection

    function __construct()
    {
        // $this->connection = new Database();
        // $this->db = new Database();
		set_time_limit(1080); 

    }
   
    
 
    /**
	 * @return string - cl could give last return ids when needed
	 */
    protected function _ms($error = false, string $ms = '', string $third = '', int $http_response = 200 ) {
		$newms = $error == false ? "Success" : "An errorr occurred";

		 
		http_response_code($http_response);
		 
		return json_encode(array(
			"error"=> $error == false ? false : true,
			"msg"=> empty($ms) ? $newms : $ms,
			"cl"=> $third
		));
		
	}  
	/**
	 * @return array 0=rowcount, 1=data
	 */
	protected function _get(string $table, string $where = '', array $values = [], bool $fetchall = true, string $orderby = '', string $del_rule = '' ): array {
		$substr = substr($where, 0, 1);
		if ($substr == '(') { // the first char is a (
			$where = $where;
		} else $where = $this->_where($where, 'and', '', $del_rule);

		$countvalues = count($values);
		$sql = $countvalues == 0 ? "SELECT * FROM $table $orderby" : "SELECT * FROM $table WHERE $where $orderby";		
		//echo $sql; //echo '<br>'; //die;
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute( $values );
        return $fetchall ? [$stmt->rowCount(), $stmt->fetchAll()] : [$stmt->rowCount(), $stmt->fetch()];
	}
	/**
	 * general query function, not used in the current version but can be used for complex queries that do not fit the other functions
	 */
	protected function _query() {
		$args = func_get_args();
		$sql = array_shift($args); 
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute( $args[0] ?? [] );
		return [$stmt->rowCount(), $stmt->fetchAll()];
	}
    /**
     * @return string value of action ie sum of columns
     */
	protected function _getmore(string $table, string $action, string $where = '', array $values = [] ):string {
		
		$sql = empty($where) ? "SELECT $action as x1 FROM $table" : "SELECT $action as x1 FROM $table WHERE {$this->_where($where)} ";		
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute( $values );
		return $stmt->fetch()['x1'] ?? '0';
	}
	
	/**
	 * @return string json_encoded string
	 */
	protected function _insert(string $table, string $columns = '', array $values = [] ):string {
		$ignore = '';
	    $exp = explode(':', $table);
	    if (isset($exp[1])) $ignore = $exp[1];
	    $table = $exp[0]; 
	    
		$pdo = $this->connection();
		$sql = "INSERT $ignore INTO $table ($columns) VALUES ({$this->_where($columns, ',', '?')}) ";		
		//echo $sql;die;
		$stmt = $pdo->prepare($sql);
		$eq = ($stmt->execute( $values ));
		$lastId = $pdo->lastInsertId();
		return $this->_ms($eq ? false : true, '', $lastId);	
	}
    
    /**
     * @return string js-encoded feedback message
     */
	protected function _update(string $table, string $columns = '', string $where = '', array $values = [] ):string {
		
		$sql = "UPDATE $table SET {$this->_where($columns, ',')} WHERE {$this->_where($where)}";	
		$stmt = $this->connection()->prepare($sql);
		$eq = ($stmt->execute( $values ));
		return $this->_ms($eq ? false : true);	
	}

    /**
     * @return string js-encoded feedback message
     */
	protected function _delete(string $table, string $where, $values = []):string {
	
		$sql = "DELETE FROM $table WHERE {$this->_where($where)}";
		$stmt = $this->connection()->prepare($sql);
		$eq = ($stmt->execute($values ));
		return $this->_ms($eq ? false : true);
	}
	/**
	 * @param string $action  either create, delete or drop
     * 
     * @return mixed js-encoded feedback message or bool   
	 */
	protected function _tables($tablename, $action = 'create') {
		if ($action == 'delete') {
			$sql = "DELETE FROM $tablename";
			$stmt = $this->connection()->prepare($sql);
			$eq = ($stmt->execute([ ]));
			return $this->_ms($eq);
		} else if ($action == 'drop') {			
			$sql = "DROP TABLE IF EXISTS $tablename";
			$stmt = $this->connection()->prepare($sql);
			$eq = ($stmt->execute([ ]));
			return $this->_ms($eq);
		} else if ($action == 'create') {
			$sql = "CREATE TABLE $tablename (id int primary key auto_increment, val1 int, val2 varchar(20), val3 varchar(20), val4 varchar(20), val5 varchar(20) ) ";
			$stmt = $this->connection()->prepare($sql);
			if ($stmt->execute([ ])) return true;
			else return false;
			
		} else if ($action == 'complete_sql') {
			$sql = "$tablename";
			$stmt = $this->connection()->prepare($sql);
			if ($stmt->execute([ ])) return true;
			else return false;
		}
		return false;
	}

	private function _where(string $where, $del = 'and', $placeholders = '', $delrule = '') {
		$exp = explode(',', $where);  
		$delall = [];
		
		if (!empty($delrule)) {
			$delall = explode(',', $delrule);
		}
		$where1 = '';
		$i = 0;
		$j = count($exp);
		foreach ($exp as $ex ) {

			if ( ($j - 1) != $i )
				if (!empty($delrule)) {
					$del = $delall[$i];
				}
			$_e1 = explode(' ', trim($ex));
			if (isset($_e1[1]) && (!empty($_e1[1])) ) {
				$ex = $_e1[0];
				$s = $_e1[1];
			} else $s = '=';

			if (!empty( $placeholders)) {
				if ( ($j - 1) == $i ) $where1 .= '? ';
				else $where1 .= "?, ";
			} else {
				if ( ($j - 1) == $i ) $where1 .= $ex . " $s ? ";
				else $where1 .= $ex . " $s ? $del ";
			}
			$i++;
		}
		return $where1;
	}
	 

    protected function _gettables() {
		$sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='{$this->dbName}'  ";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([]);
		return $stmt->fetchAll();
	}
	protected function _columns($table) {
		return $this->_get($table)[1];
	}
	public function _company() { 
		return $this->_get('company  ', '',[], false)[1];
	}
	
      
    
	public function me($id_email = '') {  
	    if (empty($id_email)) 
		    return $this->_get('users  ', 'user_ID', [ Session::get('userid') ], false )[1];
	    
		return $this->_get('users  ', 'user_ID, user_email', [ $id_email, $id_email ], false, '', 'or' )[1];
	}
	 
    /**
     * @param string $message required
     * @return void
     */
    protected function log(String $message, String $type = 'Other') {  
        $this->_insert('logs', 'l_message, l_by, l_type, l_date', [$message, Session::get('userid'), $type, time() ]);
    }
     
    protected function pagination() {
        $number = (isset($_GET['pg']) && is_numeric($_GET['pg'])) ? $_GET['pg'] : 1; 
		$thisPageFirstResult = ($number - 1) * $this->_company()['user_loop_sequence'];
		
		return " limit $thisPageFirstResult,{$this->_company()['user_loop_sequence']} ";
    }

	protected function urlAvailable(string $url, string $table, string $column) {

		$url = ltrim($url, "/");

		for ($i = 0; $i < 1000; $i++) {
			$availability = $this->_get("$table", "$column", [$url])[0];
			if ($availability === 0) break;
			$url .= "- $i";
		}

		return $url;
	}
	protected function _settings() {
		return $this->_company();
	}
















	/*********************************************
	 * 
	 * EMAIL SENDER FUNCTIONS
	 * 
	 ********************************************/
	
	protected function sendTheEmail(string $title, string $recipient, string $body, string $orignalMsgId = '', $admin = false) {
		// 
		
		file_put_contents("logs/Model.EmailByResend.log", "string $title, string $recipient, string $body, string $orignalMsgId". "\n", FILE_APPEND);

		if (!CustomFunctions::validEmail($recipient )) { return; }
		$search = ['{{title}}', '{{body}}', '{{year}}', '{{sitename}}'];
		$replace = [$title, $body, date('Y'), "<a href='#//{$_SERVER['SERVER_NAME']}'>{$this->_settings()['c_name']}</a>" ];
		$finalBody = str_replace($search, $replace, CustomFunctions::mainTemplate());
		

		if ($admin) {
			$this->PhpMailerConstruct($recipient, $title, $finalBody, $orignalMsgId );
			return;
		}

		try { 
			 
			if (!$this->EmailByResend( $recipient, $title, $finalBody, $orignalMsgId ) ) {
				//use sendmail if resend did not work...
				$this->PhpMailerConstruct($recipient, $title, $finalBody, $orignalMsgId );
			}
			 
		} catch(Exception $e) {
			//try again
			file_put_contents("logs/Model.sendthemail.log", "$e \n", FILE_APPEND);
			try {$this->PhpMailerConstruct($recipient, $title, $finalBody, $orignalMsgId );} catch(Exception $d){}
		}

		//the rest

	}

	
	public function PhpMailerConstruct(mixed $email, string $subject, mixed $body, string $orignalMsgId = '', $filename = '') {
		    
        $body1 = [];
        if (!is_array($email)) $email = [$email];
        
        if (!is_array($body)) { 
            for ($j = 0; $j < count($email); $j++)  $body1[] = $body;
        } else $body1 = $body;
            
        $messages = []; 
        $i = 0;
        foreach ($email as $rowemail) {     
    	    $messages[] = $body1[$i];
    	    $i++;
        } 

		$this->ActualSendPHPMailer($email, $subject, $messages, $orignalMsgId, $filename);
	}
	
	protected function EmailByResend(string $recipient, string $title, string $finalBody, string $orignalMsgId = '') {

		$resend = Resend::client(RESEND_API_KEY);
		$settings = $this->_settings();

		$payload = [
			'from' => "{$settings['c_name']} <{$settings['c_send_from']}>",
			'to' => $recipient,
			'subject' => $title,
			'text' => strip_tags($finalBody),
			'html' => $finalBody,
		];

		// Add threading/reply headers if original Message ID exists
		if (!empty($orignalMsgId)) {
			$payload['headers'] = [
				'In-Reply-To' => $orignalMsgId,
				'References'  => $orignalMsgId,
			];
		}
		file_put_contents("logs/Model.EmailByResend.log", json_encode($payload). "\n", FILE_APPEND);

		try {
			$rawFeed = $resend->emails->send($payload);
			// Resend PHP SDK returns a response object with an 'id' property
			//if (!empty($rawFeed) && isset($rawFeed->id)) {
				return true;
			//}
		} catch(Exception $e) {
			file_put_contents("logs/Model.EmailByResend.log", $e->getMessage() . "\n", FILE_APPEND);
        	return false; 
		}
 

		return false;
	}

	
	/***
	 * @actual mail send using @PHPMAILER
	 *  */	  
	protected function ActualSendPHPMailer(array $email, string $subject, array $message, $orignalMsgId = '', $filename = '') {
		$settings = $this->_settings();
        $mail = new PHPMailer(true);   
  
        try {  
            /*******************************************************/ 
            $mail->isSMTP();
            //$mail->SMTPDebug = 2; 
            $mail->Host = $settings['c_smtp_server'];  
            $mail->SMTPAuth = true;
            $mail->Username = $settings['c_send_from'];  
            $mail->Password = $settings['c_send_from_password'];  
            $mail->Port = $settings['c_smtp_port'];
            /***************************************************************/
             
            //$mail->SMTPKeepAlive = true;
         
            $mail->setFrom($settings['c_send_from'] , $settings['c_name']);  
            $i = 0;
            $sentemails = [];
            foreach ($email as $email_row) { 
                if (in_array($email_row, $sentemails)) continue;
                $sentemails[] = $email_row; 
                $mail->addBCC($email_row); 

				if (!empty($orignalMsgId) ) {
					$mail->addCustomHeader('In-Reply-To', $orignalMsgId);
        			$mail->addCustomHeader('References', $orignalMsgId);
				}
                  
                $mail->isHTML(true);                                 
                $mail->Subject = $subject ?? 'Test from mail auto';
                $mail->Body    = $message[$i] ?? "<div> Just a test message if working fine </div>";
                $altbody = $message[$i] ?? 'Alt body';
                $mail->AltBody = strip_tags($altbody) ;

				if (!empty($filename)) {
					$mail->AddAttachment("{$_SERVER['DOCUMENT_ROOT']}/public/assets/uploads/{$filename}", $filename); 
				}
				
                if ( !empty($_FILES['file']['name'][0]) ) { 
                	for ( $j = 0; $j < count($_FILES['file']['name']); $j++ ) { 
                        $file_tmp  = $_FILES['file']['tmp_name'][$j];
                        $file_name = $_FILES['file']['name'][$j]; 
                        $mail->AddAttachment($file_tmp, $file_name);
                	} 
                }
                
                $status = $mail->send() ? 'success' : 'fail'; 
                $this->_insert("email_logs", "recipient, status, message", [$email_row, $status, $mail->ErrorInfo] );
                $i++;
				$mail->clearAllRecipients();
				$mail->clearAttachments();
            }
            $mail->SmtpClose();
             
        } catch (Exception $e) {
            file_put_contents('Libraries.SendEmail.php.log', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}",FILE_APPEND);
           
        }
         
    }


	/*********************************************
	 * X
	 * EMAIL SENDER FUNCTIONS
	 * X
	 ********************************************/



 
	
 


	/////////////////////
}
