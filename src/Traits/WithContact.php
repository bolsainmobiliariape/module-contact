<?php

namespace Bolsainmobiliariape\ModuleContact\Traits;

use Bolsainmobiliariape\ModuleContact\Models\Contact;
use Bolsainmobiliariape\ModuleContact\Mail\ContactsMail;

trait WithContact
{
    
    public $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function rules()
    {
        return config('module-contact.rules');
    }

    public function store()
    {
        $this->validate();

        $this->contact->save();

        if(env('MAIL', false)){
            $this->sendMail('Nuevo Contacto - '. config('app.name'), $this->contact, ContactsMail::class);
        }

        $this->doingAfter();
    }

    public function doingAfter()
    {
        // things for doing after contact is saved
        // like: send Mail, redirect,  etc.
    }
}