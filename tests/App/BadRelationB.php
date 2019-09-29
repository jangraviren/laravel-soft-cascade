<?php

namespace JangraViren\Tests\App;

class BadRelationB extends User
{
    protected $softCascade = ['badrelation'];
}
