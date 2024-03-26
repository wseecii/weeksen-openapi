<?php

namespace Eecii\WeeksenOpenapi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eecii\WeeksenOpenapi\WeeksenOpenapi
 */
class WeeksenOpenapi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Eecii\WeeksenOpenapi\WeeksenOpenapi::class;
    }
}
