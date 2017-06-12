<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Role\RoleRepository;
use App\Databases\Role;
use App\Databases\Permission;

class RoleController extends Controller
{
	public function __construct(RoleRepository $role)
    {
        $this->role = $role;
    }

    public function index($trashed=null)
    {
        $roles = $this->role->getAll($trashed);
        $count_trashed = count($this->role->getAll("trashed"));
        $count_published = count($this->role->getAll(""));

        return view('admin.roles.index', ['roles'=>$roles, 'trashed'=>$count_trashed, 'published'=>$count_published]);
    }

    public function create()
    {
        $permissions = Permission::get();
    	return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->role->create($request);
        return redirect('roles/status-role=all')->withMessage('Role has been created successfully!!!');
    }

    public function edit($id)
    {
        $permissions = Permission::get();
        $role = $this->role->getById($id, "");
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update($id, Request $request)
    {
        $this->role->update($id, $request);
        return redirect('roles/status-role=all')->withMessage('Role has been updated successfully!!!');
    }
}
