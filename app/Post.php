<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable  = ['title', 'body', 'slug', 'active'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public static function boot() 
    {
        parent::boot();
        
        static::deleting(function(Post $post){
            $post->comments()->delete();
        });
    }
}
