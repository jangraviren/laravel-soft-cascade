<?php

namespace JangraViren\Tests\App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ['languages_id', 'city'];

    public function language()
    {
        return $this->belongsTo('JangraViren\Tests\App\Languages');
    }

    public function profile()
    {
        return $this->belongsTo('JangraViren\Tests\App\Profile');
    }
}
