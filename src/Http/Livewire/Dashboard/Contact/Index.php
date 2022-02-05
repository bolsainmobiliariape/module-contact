<?php

namespace Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact;

use Bolsainmobiliariape\ModuleContact\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('module-contact::dashboard.contact.index', [
            'contacts' => Contact::paginate(),
            'contact' => Contact::first()
        ])->layoutData(['header'=>'Contact']);
    }
}