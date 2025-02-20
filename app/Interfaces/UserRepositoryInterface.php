<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function showAllUsers();
    public function showUser($id);
    public function createUser();
    public function updateUser($id, $data);
    public function deleteUser($id);
}
