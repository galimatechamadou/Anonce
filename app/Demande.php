<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    public function Personnes(){
        return $this->hasMany("App\Personnes");
    }
    public function Proprietes(){
        return $this->hasMany("App\Proprietes");
    }
}