<?php

namespace App\Models;

use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterStudent extends Model
{
    
    use HasFactory;
    protected $guarded = ['id'];


    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
}
