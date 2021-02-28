<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
class LoginController extends Controller
{
    public function index(Request $request)
    {
        $this->validateForm($request);
        $credentials = new UserModel($request->input('username'), $request->input('password'));
        $serviceLogin = new SecurityService();
        $isValid = $serviceLogin->login($credentials);
        $data = ['credentials' => $credentials];
        if($isValid)
        {
            return View('loginPassed2')->with($data);
        }
        else
        {
            return View('loginFailed');
        }
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
