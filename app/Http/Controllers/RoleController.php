<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Databases\Role;
// use App\Databases\Permission;

class RoleController extends Controller
{
    public function index()
    {
    	$roles = Role::paginate(10);
    	return view('roles.index', compact(['roles'=>$roles]));
    }

    public function create()
    {
    	
    }
}
