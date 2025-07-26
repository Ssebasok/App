<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model 
{
    use HasFactory;
    
    protected $table = 'users';
    public $timestamps = false;

    protected $fillable = ['nombre', 'apellido', 'mail'];
    
    public function userDetail()
    {
        return $this->hasOne(UserDetail::class, 'user_id');
    }
}