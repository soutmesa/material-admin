<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;
use App\Databases\Role;
use Auth;

class UserController extends Controller
{
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function index($opt=null)
    {
        $users = $this->user->getAll($opt);
        $trashed = count($this->user->getAll("trashed"));
        $published = count($this->user->getAll(""));
        return view('admin.users.index', compact('users', 'trashed', 'published'));
    }

    public function create()
    {
        $roles = Role::pluck('name', 'id');
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->user->create($request);
        return redirect('users/status-user=all')->withMessage('User has been created successfully!!!');
    }

    public function edit($id)
    {
        $roles = Role::get();
        $user = $this->user->getById($id,'');
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update($id, Request $request)
    {
        $this->user->update($id, $request);
        return redirect('users/status-user=all')->withMessage('User has been updated successfully!!!');
    }

    public function show($id)
    {
        $user = $this->user->find($id);
        return view('users.show',['user']);
    }

    public function destroy($id, $opt=null)
    {
        $this->user->delete($id, $opt);
        return redirect('users/status-user=all')->withMessage('User has been deleted successfully!!!');
    }

    public function restore($id)
    {
        $this->user->restore($id);
        return redirect('users/status-user=all')->withMessage('User has been restored !!!');
    }
}
