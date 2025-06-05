<?php

namespace Jobnomade\GeoAutoComplete\Commands;

use Illuminate\Console\Command;

class GeoAutoCompleteCommand extends Command
{
    public $signature = 'filament-geo-autocomplete';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
