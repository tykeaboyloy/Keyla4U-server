<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account_type extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function user(){
        return $this->hasMany(User::class);
    }
}
