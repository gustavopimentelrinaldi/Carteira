<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    use HasFactory;
    protected $table='carteira';

    public function relUsers(){
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    
}
