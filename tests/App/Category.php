<?php

namespace JangraViren\Tests\App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use \JangraViren\SoftCascade\Traits\SoftCascadeTrait;
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'categories';

    protected $fillable = ['name'];

    protected $softCascade = ['posts'];

    /**
     * Get all posts.
     */
    public function posts()
    {
        return $this->belongsToMany('JangraViren\Tests\App\Post');
    }
}
