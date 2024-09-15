<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interface\AuthenticationRepositoryInterface;

class AuthenticationRepository implements AuthenticationRepositoryInterface
{
    public $user;
    function __contruct(User $user){
        $this->user = $user;
    }

    public function register(array $data){
        return $this->user::create($data);
    }

    public function login(array $data){


    }

    public function logout(){

    }
}
?>