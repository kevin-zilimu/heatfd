<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','Phone_Number','Wechat_Id','Role_Id','Location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\post');
    }
    public function orders(){

        return $this->hasMany('App\Order');
    }
    public function foodposts(){
        return $this->hasMany('App\Foodpost','User_Id','id');
    }
    public function role(){

        return $this->hasOne('App\Role','id','Role_Id');
    }
    /*
    private function getUserRole()
    {
        return $this->roles()->getResults();
    }
    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role)==strtolower($this->have_role->name)) ? true : null;
    }
    public function hasRole($roles)
    {
        $this->have_role = $this->getUserRole();

        if($this->have_role->name=='Root')
        {
            return true;
        }

        if(is_array($roles))
        {
            foreach ($roles as  $need_role) {
                if($this->checkIfUserHasRole($need_role))
                {
                    return true;
                }
            }
        }else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }*/

}
