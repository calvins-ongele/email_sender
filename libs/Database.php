<?php
class Database {
     
    
    private string $server = SERVER;
    private string $username= USERNAME;
    private string $password = PASSWORD;
    protected string $dbName = DBNAME;
    
    public function connection() {
        @session_start();
        try {
            $dsn = 'mysql:host=' . $this->server . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::FETCH_ASSOC); 
            return $pdo;
        } catch (PDOException $e) {
            die("<div style='padding:20px;margin-top:10%; background:lightgrey' class='shadow'> <h1 style='background:grey;margin:10px;' >Connection failed...</h1> 
            <p> There are too many users online. Please refresh the page or try again after a few seconds.</p></div>");
            echo "Access Denied: \r\n"  . $e->getMessage();
        }
       
    }
     

  
     public function con_mysqli() {
        return new mysqli($this->server, $this->username, $this->password, $this->dbName );
    }
}