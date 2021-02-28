<?php
namespace App\Services\Business;

use App\Models\CustomerModel;
use App\Services\Data\OrderDAO;
use App\Services\Data\CustomerDAO;

class OrderService
{

    private $DAO;

    public function __construct()
    {
        
    }

    public function addOrder(CustomerModel $customer, $product)
    {
        $this->DAO = new CustomerDAO();
        if ($customerID = $this->DAO->getCustomerID($customer))
        {
            echo $customerID;
            $this->DAO = new OrderDAO();
            return $this->DAO->addOrder($product, $customerID);
        }
        else
        {
            echo "This customer does not exist";
            return false;
        }
    }
    
    public function createOrder(CustomerModel $customer, $product)
    {
        $this->DAO = new OrderDAO();
        return $this->DAO->createOrder($customer, $product);
    }
}

