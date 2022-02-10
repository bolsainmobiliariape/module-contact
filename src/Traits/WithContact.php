<?php

namespace Bolsainmobiliariape\ModuleContact\Traits;

use Bolsainmobiliariape\ModuleContact\Models\Contact;

trait WithContact
{
    public Contact $contact;

    public function rules()
    {
        return config('module-contact.rules');
    }

    public function store()
    {
        $this->validate();

        $this->contact->save();

        $this->doingAfter();
    }

    public function doingAfter()
    {
        // things for doing after contact is saved
        // like: send Mail, redirect,  etc.
    }
}