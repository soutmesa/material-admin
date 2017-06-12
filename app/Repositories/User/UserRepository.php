<?php

namespace App\Repositories\User;

use App\Repositories\User\UserInterface;
use App\Databases\User;
use Auth;

class UserRepository implements UserInterface
{
    public $user;

    function __construct(User $user) {
        $this->user = $user;
    }

    public function getAll($opt)
    {
        if( isset($opt) && $opt == "trashed"){
            $users = $this->user->onlyTrashed()->paginate(10);
        }else if(isset($opt) && $opt == ""){
            $users = $this->user->get();
        }else{
            $users = $this->user->paginate(10);
        }
        return $users;
    }

    public function getById($id, $opt)
    {
        if(isset($opt) && $opt == "force"){
            return$this->user->onlyTrashed()->where('id', '=', $id)->get()->first();
        }
        return $this->user->findOrFail($id);
    }

    public function create($request)
    {
        $datas = $request->all();
        $this->user = $this->user->create($datas);
        $this->user->authenticated()->attach(Auth::id());
        if($request->has('roles'))
        {
            $this->user->roles()->attach($datas['roles']);
        }
        return $this->user;
    }

    public function update($id, $request)
    {
        $datas = $request->all();
        $this->user = $this->getById($id, '');
        $this->user->update($datas);
        if($request->has('roles'))
        {
            $this->user->roles()->sync($datas['roles']);
        }
        return $this->user;
    }

    public function delete($id, $opt)
    {
        $user = $this->getById($id, $opt);
        if($opt == "trash"){
            $user->delete();
        }else{
            $user->forceDelete();
            $user->authenticated()->detach(Auth::id());
        }
        return true;
    }

    public function restore($id)
    {
        $user = $this->getById($id, 'force');
        return $user->restore();
    }
}