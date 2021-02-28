<?php
namespace App\Services\Data;

use App\Models\CustomerModel;
use App\Services\Data\Utility\DBConnect;
use Carbon\Exceptions\Exception;

class OrderDAO
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
    
    public function addOrder(string $product, int $customerID)
    {
        try
        {
            $this->dbQuery = "INSERT INTO `order`
                                (PRODUCT, CUSTOMERID)
                                VALUES
                                ('" . $product . "', '" . $customerID . "')";
            if($this->connection->query($this->dbQuery))
            {
                $this->connection->close();
                return true;
            }
            else 
            {
                echo $this->connection->connect_error;
                return false;
            }
        }
        catch (Exception $e)
        {
            echo "What?";
        }
    }
    
    public function createOrder($customer, $product)
    {
        $this->connection->autocommit(FALSE);
        $customerDAO = new CustomerDAO();
        $customerDAO->addCustomer($customer);
        $customerDAO = new CustomerDAO();
        $customerID = $customerDAO->getCustomerID($customer);
            $this->dbQuery = "INSERT INTO `order`
                                (PRODUCT, CUSTOMERID)
                                VALUES
                                ('" . $product . "', '" . $customerID . "')";
            if($this->connection->query($this->dbQuery))
            {
                $this->connection->commit();
                $this->connection->close();
                return true;
            }
            else
            {
                $this->connection->rollback();
                return false;
            }
        
    }
}


?>