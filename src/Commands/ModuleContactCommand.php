<?php

namespace Bolsainmobiliariape\ModuleContact\Commands;

use Illuminate\Console\Command;

class ModuleContactCommand extends Command
{
    public $signature = 'module-contact';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
