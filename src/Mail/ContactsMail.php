<?php

namespace Bolsainmobiliariape\ModuleContact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Bolsainmobiliariape\ModuleContact\Models\Contact;

class ContactsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->markdown('module-contact::mails.contacts-mail');
    }
}
