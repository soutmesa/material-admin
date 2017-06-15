<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Http\Requests\PermissionUpdateRequest;
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

    public function store(PermissionRequest $request)
    {
        $this->permission->create($request);
        return redirect('permissions/status-permi=all')->withMessage('Permission has been created successfully!!!');
    }

    public function edit($id)
    {
        $permission = $this->permission->getById($id, "");
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update($id, PermissionUpdateRequest $request)
    {
        $permission = $this->permission->update($id, $request);
        return redirect('permissions/status-permi=all')->withMessage('Permission has been updated successfully!!!');
    }

    public function destroy($id,$act=null)
    { 
        $this->permission->delete($id, $act);
        return redirect('permissions/status-permi=all')->withMessage('Permission has been deleted !!!');
    }

    public function restore($id)
    {
        $this->permission->restore($id);
        return redirect('permissions/status-permi=all')->withMessage('Permission has been restored !!!');
    }
}
