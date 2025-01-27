<?php

namespace JangraViren\Tests\App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use \JangraViren\SoftCascade\Traits\SoftCascadeTrait;
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['title', 'body'];

    protected $softCascade = ['comments'];

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany('JangraViren\Tests\App\Comment', 'commentable');
    }

    /**
     * Get all posts.
     */
    public function categories()
    {
        return $this->belongsToMany('JangraViren\Tests\App\Category');
    }
}
