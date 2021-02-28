<?php
namespace App\Services\Data;

use App\Models\UserModel;
use Carbon\Exceptions\Exception;

class SecurityDAO
{

    private $conn;

    private $servername = "localhost";

    private $username = "root";

    private $password = "root";

    private $dbname = "activity2";

    private $dbquery;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function findByUser(UserModel $credentials)
    {
        try 
        {
            $this->dbQuery = "SELECT USERNAME, PASSWORD
                                FROM user
                                WHERE USERNAME = '" . $credentials->getUsername() . "'AND PASSWORD = '" . $credentials->getPassword() . "'";
            
            $result = mysqli_query($this->conn, $this->dbQuery);
            if(mysqli_num_rows($result) > 0)
            {
                mysqli_free_result($result);
                mysqli_close($this->conn);
                return true;
            }
            else 
            {
                echo mysqli_error($this->conn);
                mysqli_close($this->conn);
                return false;
            }
        } 
        catch (Exception $e) 
        {
            
        }
    }
}

