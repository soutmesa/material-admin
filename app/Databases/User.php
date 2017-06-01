<?php

namespace App\Databases;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    // use SoftDeletes;

    use EntrustUserTrait;

    use Traits\DateFormat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'username', 'email', 'password',
    // ];

    protected $table = 'users';

    protected $guarded = ['id', 'password_confirmation'];

    protected $dates = ['deleted_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Define accessor method
    public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }
    
    public function setFirstNameAttribute($firstname)
    {
        return $this->attributes['firstname'] = strtoupper($firstname);
    }
    
    public function setLastNameAttribute($lastname)
    {
        return $this->attributes['lastname'] = ucfirst($lastname);
    }

    // Define relationships method

    public function authenticables()
    {
        return $this->morphTo()->withTimestamps();
    }

    public function authenticated()
    {
        return $this->morphToMany('App\Databases\User', 'authenticable')->withTimestamps(); 
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    public function roles()
    {
        return $this->belongsToMany('App\Databases\Role')->withTimestamps();
    }

    public function getAll()
    {
        return static::all();
    }

    public function findUser($id)
    {
        return static::find($id);
    }

    public function deleteUser($id)
    {
        return static::find($id)->delete();
    }
}
