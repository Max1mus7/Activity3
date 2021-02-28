<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Services\Business\OrderService;
class OrderController extends Controller
{
    public function addOrder(Request $request)
    {
        $product = $request->input('product');
        //This is more efficient because it is not calling a method
        $customer = new CustomerModel($request->input('firstName'), $request->input('lastName'));
        //Instantiate BusinessLayer Logic
        $orderService = new OrderService();
        
        //Pass the order data to the BusinessLayer
        $isValid = $orderService->addOrder($customer, $product);
        
        if($isValid)
        {
            echo "Order Data Added Successfully";
        }
        else 
        {
            echo "Order data was not added.";
        }
        //return view('loginPassed3');
    }
    
    public function createOrder(Request $request)
    {
        $product = $request->input('product');
        //This is more efficient because it is not calling a method
        $customer = new CustomerModel($request->input('firstName'), $request->input('lastName'));
        //Instantiate BusinessLayer Logic
        $orderService = new OrderService();
        
        //Pass the order data to the BusinessLayer
        $isValid = $orderService->createOrder($customer, $product);
        
        if($isValid)
        {
            echo "Order Data Added Successfully";
        }
        else
        {
            echo "Order data was rolled back.";
        }
        //return view('loginPassed3');
    }
    
    
    //Validation added for Activity 3
    public function validateForm(Request $request)
    {
        //setup Data Validation Rules for Login Form
        $rules = ['username' => 'Required | Between: 4, 10 | Alpha', 
                    'password' => 'Required | Between: 4, 10'];
        //Run data validation rules
        $this->validate($request, $rules);
    }
}
