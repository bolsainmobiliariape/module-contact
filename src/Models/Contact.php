<?php

namespace Bolsainmobiliariape\ModuleContact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";

    public function getFillable()
    {
        return config('module-contact.fields');
    }
}