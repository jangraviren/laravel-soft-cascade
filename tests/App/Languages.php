<?php

namespace JangraViren\Tests\App;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use \JangraViren\SoftCascade\Traits\SoftCascadeTrait;

    protected $table = 'languages';

    protected $fillable = ['language'];

    protected $softCascade = ['addresses@restrict'];

    public function addresses()
    {
        return $this->hasMany('JangraViren\Tests\App\Addresses');
    }
}
