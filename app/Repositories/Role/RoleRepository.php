<?php

namespace App\Repositories\Role;

use App\Repositories\Role\RoleInterface;
use App\Databases\Role;

class RoleRepository implements RoleInterface
{
    public $role;

    function __construct(Role $role) {
        $this->role = $role;
    }

    public function getAll()
    {
        return $this->role->get();
    }

    public function getById($id)
    {
        return $this->role->findById($id);
    }

    public function create(array $datas)
    {
        return $this->role->create($datas);
    }

    public function update($id, array $datas)
    {
        $role = $this->role->findOrFail(id);
        $role->role->update($datas);
        return $role;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }
}