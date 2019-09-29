<?php

namespace JangraViren\SoftCascade\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class LumenEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
      'eloquent.deleting: *'                     => ['JangraViren\SoftCascade\Listeners\CascadeDeleteListener'],
      'eloquent.restoring: *'                    => ['JangraViren\SoftCascade\Listeners\CascadeRestoreListener'],
      'Illuminate\Database\Events\QueryExecuted' => ['JangraViren\SoftCascade\Listeners\CascadeQueryListener'],
    ];
}
