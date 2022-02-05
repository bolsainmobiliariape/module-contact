<?php

namespace Bolsainmobiliariape\ModuleContact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";

    public function getFillable()
    {
        return config('module-contact.fields');
    }
}