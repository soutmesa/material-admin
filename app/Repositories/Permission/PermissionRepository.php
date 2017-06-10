<?php

namespace App\Repositories\Permission;

use App\Repositories\Permission\PermissionInterface;
use App\Databases\Permission;

class PermissionRepository implements PermissionInterface
{
    public $permission;

    function __construct(Permission $permission) {
        $this->permission = $permission;
    }

    public function getAll()
    {
        return $this->permission->get();
    }

    public function getById($id)
    {
        return $this->permission->findById($id);
    }

    public function create(array $datas)
    {
        return $this->permission->create($datas);
    }

    public function update($id, array $datas)
    {
        $permission = $this->permission->findOrFail(id);
        $permission->permission->update($datas);
        return $permission;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }
}