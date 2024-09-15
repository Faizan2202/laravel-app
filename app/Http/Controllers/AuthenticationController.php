<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interface\AuthenticationRpositoryInterface;

class AuthenticationController extends Controller
{
    public $authenticationRepository;
    function __contruct(AuthenticationRpositoryInterface $authenticationRepository){
        $this->authenticationRepository = $authenticationRepository;
    }
    
    public function register(Request $request){
        $request->validate([
            'emai'=> 'required | unique',
            'password'=> 'password | comfirmed'

        ]);
        $this->authenticationRepository;
    }

    public function login(){

    }

    public function logout(){

    }
}
