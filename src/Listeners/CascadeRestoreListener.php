<?php

namespace JangraViren\SoftCascade\Listeners;

use JangraViren\SoftCascade\EloquentSoftCascade;

class CascadeRestoreListener
{
    /**
     * Handel the event for eloquent restore.
     *
     * @param  $event
     * @param  $model
     *
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter("event"))
     */
    public function handle($event, $model)
    {
        (new EloquentSoftCascade())->cascade($model, 'restore');
    }
}
