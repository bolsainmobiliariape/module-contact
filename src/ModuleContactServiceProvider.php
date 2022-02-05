<?php

namespace Bolsainmobiliariape\ModuleContact;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bolsainmobiliariape\ModuleContact\Commands\ModuleContactCommand;

class ModuleContactServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package 
            ->name('module-contact')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_module-contact_table')
            ->hasRoute('contact')
            ->hasCommand(ModuleContactCommand::class);
    }
}
