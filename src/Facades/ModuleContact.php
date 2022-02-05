<?php

namespace Bolsainmobiliariape\ModuleContact\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bolsainmobiliariape\ModuleContact\ModuleContact
 */
class ModuleContact extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'module-contact';
    }
}
