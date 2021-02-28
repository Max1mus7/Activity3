<?php
namespace App\Services\Data;

use App\Models\CustomerModel;
use App\Services\Data\Utility\DBConnect;
use Carbon\Exceptions\Exception;

class CustomerDAO
{
    
    private $conn;
    private $dbname = "activity3";
    private $dbQuery;
    private $connection;
    public function __construct()
    {
        $this->conn = new DBConnect($this->dbname);
        $this->connection = $this->conn->getDbConnect();
    }
    
    
    
    public function addCustomer(CustomerModel $customerData)
    {
        try
        {
            $this->dbQuery = "INSERT INTO customer
                                (FIRSTNAME, LASTNAME)
                                VALUES
                                ('" . $customerData->getFirstName() . "', '" . $customerData->getLastName() . "')";
            
            if($this->connection->query($this->dbQuery))
            {
                $this->connection->close();
                return true;
            }
            else 
            {
                echo $this->connection->connect_error;
                $this->connection->close();
                return false;
            }
        }
        catch (Exception $e)
        {
            
        }
    }
    
    public function getCustomerID(CustomerModel $customerData)
    {
        try
        {
            $this->dbQuery = "SELECT * FROM customer
                                WHERE firstName = '" . $customerData->getFirstName() . "' AND lastName = '" . $customerData->getLastName() . "'";
            
            if($result = $this->connection->query($this->dbQuery))
            {
                $customerID = $result->fetch_assoc()['customerID'];
                $this->connection->close();
                return $customerID;
            }
            else
            {
                echo $this->connection->connect_error;
                $this->connection->close();
                return false;
            }
        }
        catch (Exception $e)
        {
            
        }
    }
}


?>