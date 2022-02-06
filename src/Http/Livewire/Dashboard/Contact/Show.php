<?php 

namespace Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact;

use Bolsainmobiliariape\ModuleContact\Models\Contact;
use Livewire\Component;

class Show extends Component
{

    public Contact $contact;

    public $names;


    public function markAsContacted($id)
    {
        $contact = Contact::find($id);

        $contact->contacted = !$contact->contacted;

        $contact->save();
    }

    public  function mount()
    {
        $this->names = config('module-contact.names');
    }

    public function render()
    {
        return view('module-contact::dashboard.contact.show')
            ->layoutData(['header' => 'Contactos / Detalle']);
    }
}