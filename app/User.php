<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email','phone', 'rut', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFirstNameAttribute(){
        
        $name = $this->name;
        $first_name_pos = strpos($name, ' ');
        if($first_name_pos > 0){
            $first_name = substr($name, 0, $first_name_pos);        
        }else{
            $first_name = $name;
        }        
        return $first_name;
        
    }

}
