<?php

namespace App\Repositories;

use App\Repositories\Interface as RoleInterface;
use App\Databases\Role;

class RoleRepository implements RoleInterface
{
    public $role;

    function __construct(Role $role) {
    $this->role = $role;
    }

    public function getAll()
    {
        return $this->role->getAll();
    }

    public function find($id)
    {
        return $this->role->findRole($id);
    }

    public function delete($id)
    {
        return $this->role->deleteRole($id);
    }
}