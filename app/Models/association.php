<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class association extends Model
{
    use HasFactory;

    public function useradmis(){
        return $this->hasMany('App\Models\useradmin');
    }
}
