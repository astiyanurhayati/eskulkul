<?php

namespace App\Models;

use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Daftar extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function instructor(){
        return $this->hasOne(Instructor::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
