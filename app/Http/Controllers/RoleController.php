<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Role\RoleRepository;
use App\Databases\Role;
// use App\Databases\Permission;

class RoleController extends Controller
{
	public function __construct(RoleRepository $role)
    {
        $this->role = $role;
    }

    public function index()
    {
    	$roles = Role::paginate(10);
    	dd($roles);
    	return view('roles.index', compact(['roles'=>$roles]));
    }

    public function create()
    {
    	
    }
}
