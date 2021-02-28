<?php
namespace App\Services\Business;

use App\Services\Data\SecurityDAO;

use App\Models\CustomerModel;
use App\Models\UserModel;

use App\Services\Data\CustomerDAO;
use App\Services\Data\OrderDAO;


class SecurityService
{
     private $DAO;
     
     public function __construct()
     {
        
     }
     
     public function login($credentials)
     {
         $this->DAO = new SecurityDAO();
         return $this->DAO->findByUser($credentials);
     }
     
     public function addCustomer(CustomerModel $customerData)
     {
         $this->DAO = new CustomerDAO();
         return $this->DAO->addCustomer($customerData);
     }
     
     public function addOrder(string $product, int $customerID)
     {
         $this->DAO = new OrderDAO();
         
         return $this->DAO->addOrder($product, $customerID);
     }
}

?>