<?php

namespace Eecii\WeeksenOpenapi\Models;

use Illuminate\Database\Eloquent\Model;

class WeeksenOpenapi extends Model
{
    protected $table = 'weeksen_openapi';

    protected $casts = [
        'params' => 'array',
        'response' => 'array',
        'errors' => 'array',
        'is_authorized' => 'boolean',
        'version' => 'array',
    ];
}
