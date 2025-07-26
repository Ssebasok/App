<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';
    public $timestamps = false; 

    protected $fillable = ['user_id', 'saldo', 'success', 'password', 'created_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}