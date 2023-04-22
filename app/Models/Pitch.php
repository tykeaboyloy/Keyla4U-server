<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function court(){
        return $this->belongsTo(Court::class);
    }

    public function reservation() {
        return $this->belongsTo(Reservetion::class);
    }

    public function time(){
        return $this->belongsToMany(Time::class);
    }
}