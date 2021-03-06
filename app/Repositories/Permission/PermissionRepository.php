<?php

namespace App\Repositories\Permission;

use App\Repositories\Permission\PermissionInterface;
use App\Databases\Permission;
use Auth;

class PermissionRepository implements PermissionInterface
{
    public $permission;

    function __construct(Permission $permission) {
        $this->permission = $permission;
    }

    public function getAll($opt)
    {
        if( isset($opt) && $opt == "trashed"){
            $permissions = $this->permission->onlyTrashed()->paginate(10);
        }else if(isset($opt) && $opt == ""){
            $permissions = $this->permission->get();
        }else{
            $permissions = $this->permission->orderBy('created_at', 'desc')->paginate(10);
        }
        return $permissions;
    }

    public function getById($id, $opt)
    {
        if(isset($opt) && $opt == "force"){
            return $this->permission->onlyTrashed()->where('id', '=', $id)->get()->first();
        }
        return $this->permission->findOrFail($id);
    }

    public function create($datas)
    {
        $permission = $this->permission->create($datas->all());
        $permission->authenticated()->attach(Auth::id());
        return $permission;
    }

    public function update($id, $datas)
    {
        $this->permission = $this->getById($id, "");
        $this->permission->update($datas->all());
        return $this->permission;
    }

    public function delete($id, $opt)
    {
        $permission = $this->getById($id, $opt);
        if($opt == "trash"){
            $permission->delete();
        }else{
            $permission->forceDelete();
            $permission->authenticated()->detach(Auth::id());
        }
        return true;
    }

    public function restore($id)
    {
        $permission = $this->getById($id, 'force');
        return $permission->restore();
    }
}