<?php

namespace App\Models;

use App\Models\User;
use App\Models\Daftar;
use App\Models\Prestasi;
use App\Models\InfoLomba;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function prestasis(){
        return $this->hasMany(Prestasi::class);
    }

    public function infolombas(){
        return $this->hasMany(InfoLomba::class);
    }

   public function user(){
        return $this->hasMany(User::class);
   }
}
