<?php

namespace App\Repositories;

use App\Repositories\Interface as UserInterface;
use App\Databases\User;

class UserRepository implements UserInterface
{
    public $user;

    function __construct(User $user) {
    $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->getAll();
    }

    public function find($id)
    {
        return $this->user->findUser($id);
    }

    public function delete($id)
    {
        return $this->user->deleteUser($id);
    }
}