<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Progja;
use App\Models\Student;
use App\Models\Category;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'image_profile',
        'password',
        'role',
        'eskul_name',
        'category_id'
    ];

    public function progja(){
        return $this->hasMany(Progja::class);
    }

   public function category(){
        return $this->belongsTo(Category::class);
   }

   public function students(){
        return $this->belongsToMany(Student::class, 'student_user', 'user_id', 'student_id');
   }

   public function student(){
         return $this->hasMany(Student::class);
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
