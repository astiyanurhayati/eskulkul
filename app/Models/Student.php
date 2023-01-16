<?php

namespace App\Models;

use App\Models\User;
use App\Models\StudentUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function users(){
        return $this->belongsToMany(User::class, 'student_user', 'student_id', 'user_id');
    }

    public function studentuser (){
        return $this->hasMany(StudentUser::class);
    }

}
