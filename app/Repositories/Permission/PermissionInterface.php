<?php

namespace App\Repositories\Permission;

interface PermissionInterface
{
    public function getAll($opt);

    public function getById($id, $opt);

    public function create($datas);

    public function update($id, $datas);

    public function delete($id, $opt);

    public function restore($id);
}