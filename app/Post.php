<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable  = ['title', 'body', 'slug', 'active'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /*
    public static function boot() 
    {
        parent::boot();
        
        static::deleting(function(Post $post){
            $post->comments()->delete();
        });
    }
    */
}
