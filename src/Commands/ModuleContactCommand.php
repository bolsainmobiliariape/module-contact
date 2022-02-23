<?php

namespace Bolsainmobiliariape\ModuleContact\Commands;

use Illuminate\Console\Command;

class ModuleContactCommand extends Command
{
    public $signature = 'module:contact';

    public $description = 'Publish config and migration';

    public function handle(): int
    {
        
        $this->callSilent('vendor:publish', ['--tag'=>'module-contact-config']);
        $this->callSilent('vendor:publish', ['--tag'=>'module-contact-migrations']);

        $this->comment('Published module-contact config file and migration');

        return self::SUCCESS;
    }
}
