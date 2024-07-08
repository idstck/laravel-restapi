<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    // protected $hidden = ['created_at', 'updated_at']; // hidden column
    // protected $appends = ['stored_at']; // adding column

    // public function getStoredAtAttribute()
    // {
    //     return $this->created_at->diffForHumans();
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
