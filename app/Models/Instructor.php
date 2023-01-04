<?php

namespace App\Models;

use App\Models\Daftar;
use App\Models\MasterStudent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function daftar(){
        return $this->belongsTo(Daftar::class);
    }

    public function masterstudent(){
        return $this->hasOne(MasterStudent::class);
    }
}
