<?php

namespace Eecii\WeeksenOpenapi\Commands;

use Illuminate\Console\Command;

class WeeksenOpenapiCommand extends Command
{
    public $signature = 'weeksen:openapi';

    public $description = 'My command';

    public function handle(): int
    {


        return self::SUCCESS;
    }
}
