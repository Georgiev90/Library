<?php

namespace App\Service;


use App\Data\UserDTO;

interface UserServiceInterface
{
    public function register(UserDTO $userDTO, string $confirmPassword) : bool;

    public function login(string $username, string $password) : ?UserDTO;

    public function currentUser() : ?UserDTO;

    public function update(UserDTO $userDTO) : bool;

    public function isLogged() : bool;
}