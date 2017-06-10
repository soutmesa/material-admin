<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;
use App\Databases\Role;
use App\Databases\Permission;
use App\Databases\User;
use Auth;

class UserController extends Controller
{
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(1);
        $users = $this->user->getAll();
        dd($users);
        return view('users.index',['users']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);
        return view('users.show',['user']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->user->delete($id);
        return redirect()->route('users');
    }
}
