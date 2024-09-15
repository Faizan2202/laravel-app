<?php
namespace App\Repository;

interface AuthenticationRepositoryInterface{

    public function register(array $data);
    public function login(array $data);
    public function logout();

}
?>