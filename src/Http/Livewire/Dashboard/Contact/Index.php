<?php

namespace Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact;

use Bolsainmobiliariape\ModuleContact\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithSorting;

class Index extends Component
{
    use WithPagination;
    use WithSorting;

    public function mount()
    {
        $this->sortField = "contacted";
    }

    public function markAsContacted($id)
    {
        $contact = Contact::find($id);

        $contact->contacted = !$contact->contacted;

        $contact->save();
    }

    public function render()
    {
        return view('module-contact::dashboard.contact.index', [
            'contacts' => Contact::orderBy($this->sortField, $this->sortDirection)->paginate(),
        ])->layoutData(['header'=>'Contact']);
    }
}