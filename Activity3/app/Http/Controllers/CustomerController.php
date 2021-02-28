<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Services\Business\SecurityService;

class CustomerController extends Controller
{
    //To obtain an instance of the current http request from a post
    public function index(Request $request) 
    {
        // Create a UserModel with username and password
        $customerData = new CustomerModel(request()->get('firstName'), request()->get('lastName'));

        // Instantiate the Business Layer
        $serviceCustomer = new SecurityService();

        // Pass customer data to Business Layer
        $isValid = $serviceCustomer->addCustomer($customerData);

        // Determine view to display

        if($isValid)
        {
            echo "Customer data added successfully";
        }
        else 
        {
            echo "Customer data was not added";
        }
        return view('loginPassed3');
    }

    // Validation added for activity 3
    public function validateForm(Request $request)
    {
        // setup data validation rules for login form
        $rules = ['user_name' => 'Required | Between: 4, 10 | Alpha', 
            'password' => 'Required | Between: 4, 10'];

        $this->validate($request, $rules);
    }
}