<?php

namespace JangraViren\Tests\App;

class BadRelation extends User
{
    protected $softCascade = ['badrelation'];

    public function badrelation()
    {
        return false;
    }
}
