<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Permission\PermissionRepository;

class PermissionController extends Controller
{
	public function __construct(PermissionRepository $permission)
    {
        $this->permission = $permission;
    }

    public function index($trashed=null)
    {
    	$permissions = $this->permission->getAll($trashed);
        $count_trashed = count($this->permission->getAll("trashed"));
        $count_published = count($this->permission->getAll(""));

    	return view('admin.permissions.index', ['permissions'=>$permissions, 'trashed'=>$count_trashed, 'published'=>$count_published]);
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $this->permission->create($request);
        return redirect('permissions/status-permi=all')->withMessage('Permission has been created successfully!!!');
    }

    public function edit($id)
    {
        $permission = $this->permission->getById($id, "");
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update($id, Request $request)
    {
        $permission = $this->permission->update($id, $request);
        return redirect('permissions/status-permi=all')->withMessage('Permission has been updated successfully!!!');
    }
}
