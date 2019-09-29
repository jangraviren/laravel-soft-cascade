<?php

namespace JangraViren\Tests\App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use \JangraViren\SoftCascade\Traits\SoftCascadeTrait;

    protected $fillable = ['phone'];

    protected $softCascade = ['address'];

    public function address()
    {
        return $this->hasOne('JangraViren\Tests\App\Addresses');
    }

    public function user()
    {
        return $this->belongsTo('JangraViren\Tests\App\Use');
    }

    public function badrelation()
    {
        return $this->hasMany('JangraViren\Tests\App\Profile');
    }
}
