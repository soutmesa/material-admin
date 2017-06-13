<?php

namespace App\Repositories\Role;

use App\Repositories\Role\RoleInterface;
use App\Databases\Role;
use Auth;

class RoleRepository implements RoleInterface
{
    public $role;

    function __construct(Role $role) {
        $this->role = $role;
    }

    public function getAll($opt)
    {
        if( isset($opt) && $opt == "trashed"){
            $roles = $this->role->onlyTrashed()->paginate(10);
        }else if(isset($opt) && $opt == ""){
            $roles = $this->role->get();
        }else{
            $roles = $this->role->orderBy('created_at', 'desc')->paginate(10);;
        }
        return $roles;
    }

    public function getById($id, $opt)
    {
        if(isset($opt) && $opt == "force"){
            return $this->role->onlyTrashed()->where('id', '=', $id)->get()->first();
        }
        return $this->role->findOrFail($id);
    }

    public function create($request)
    {
        $datas = $request->all();
        $role = $this->role->create($datas);
        $role->authenticated()->attach(Auth::id());
        if($request->has('permissions'))
        {
            $role->permissions()->attach($datas["permissions"]);
        }
        return $role;
    }

    public function update($id, $request)
    {
        $datas = $request->all();
        $this->role = $this->getById($id, "");
        $this->role->update($datas);
        if($request->has('permissions'))
        {
            $this->role->permissions()->sync($datas['permissions']);
        }
        return $this->role;
    }

    public function delete($id, $opt)
    {
        $role = $this->getById($id, $opt);
        if($opt == "trash"){
            $role->delete();
        }else{
            $role->forceDelete();
            $role->authenticated()->detach(Auth::id());
        }
        return true;
    }

    public function restore($id)
    {
        $role = $this->getById($id, 'force');
        return $role->restore();
    }
}