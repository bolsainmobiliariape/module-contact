<?php

namespace Bolsainmobiliariape\ModuleContact;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact\Index;
use Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact\Show;
use Livewire\Livewire;

class ModuleContactServiceProvider extends PackageServiceProvider
{

    public function bootingPackage()
    {
        Livewire::component('dashboard.contact.index', Index::class);
        Livewire::component('dashboard.contact.show', Show::class);
    }
    
    public function configurePackage(Package $package): void
    {
        $package 
            ->name('module-contact')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_module_contact_table')
            ->hasRoute('contact');
    }
}
