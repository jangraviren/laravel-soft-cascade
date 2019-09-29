<?php

namespace JangraViren\Tests\App;

class BadRelationAction extends User
{
    protected $softCascade = ['badrelation@error'];

    public function badrelation()
    {
        return false;
    }
}
