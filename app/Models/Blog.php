<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // protected $fillable = [
    //     'user_id',
    //     'title',
    //     'description',
    // ];

    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
