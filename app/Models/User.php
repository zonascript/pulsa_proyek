<?php

namespace Pulsa\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class User extends Model implements AuthenticatableContract
{
	use Authenticatable;
    
    protected $table = 'user';
    protected $fillable = ['username', 'password', 'status', 'role_user_id', 'created_by'];
    protected $hidden = ['password', 'remember_token'];
    
}
