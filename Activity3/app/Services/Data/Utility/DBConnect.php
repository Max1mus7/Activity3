<?php
namespace App\Services\Data\Utility;

use App\Models\UserModel;
use Carbon\Exceptions\Exception;
use PhpParser\Node\Expr\Cast\Bool_;
use mysqli;

class DBConnect
{

    private $conn;

    private $servername = "localhost";

    private $username = "root";

    private $password = "root";

    private $dbname = "";

    private $dbquery;

    public function __construct($dbname)
    {
        $this->dbname = $dbname;
    }
    
    public function getDbConnect()
    {
        //OOP
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        if($this->conn->connect_error)
        {
            echo "" . $this->conn->connect_error;
            exit();
        }
        return ($this->conn);
    }
    
    public function closeDbConnect()
    {
        $this->conn->close();
    }
    
    public function setAutoCommit($bool)
    {
        $this->conn->autocommit($bool);
    }
    
    public function beginTransaction()
    {
        $this->conn->begin_transaction();
    }
    
    public function endTransaction()
    {
        $this->conn->commit();
    }
    
    public function rollbackTransaction()
    {
        $this->conn->rollback();
    }
}

