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

    
    public static function boot() 
    {
        parent::boot();
        // Delete Post with Comments
        static::deleting(function(Post $post){
            $post->comments()->delete();
        });
        // Restore Post with Comments
        static::restoring(function(Post $post){
            $post->comments()->restore();
        });
    }
    
}
