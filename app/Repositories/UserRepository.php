<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;


/**
 * Class UserRepository.
 */
class UserRepository implements UserRepositoryInterface
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function showAllUsers()
    {
        return $this->user::all();
    }
    public function showUser($id)
    {
        return $this->user::findOrFail($id);
    }
    public function createUser()
    {
        //
    }
    public function updateUser($id, $data)
    {
        //
    }
    public function deleteUser($id)
    {
        //
    }
}
