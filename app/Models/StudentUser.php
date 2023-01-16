<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class StudentUser extends Model
{
    use HasFactory;
    protected $table = 'student_user';
    protected $guarded = ['id'];
    
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
