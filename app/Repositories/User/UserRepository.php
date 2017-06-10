<?php

namespace App\Repositories\User;

use App\Repositories\User\UserInterface;
use App\Databases\User;

class UserRepository implements UserInterface
{
    public $user;

    function __construct(User $user) {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->get();
    }

    public function getById($id)
    {
        return $this->user->findById($id);
    }

    public function create(array $datas)
    {
        return $this->user->create($datas);
    }

    public function update($id, array $datas)
    {
        $user = $this->user->findOrFail(id);
        $user->user->update($datas);
        return $user;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }
}