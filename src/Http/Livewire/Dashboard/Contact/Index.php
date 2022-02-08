<?php

namespace Bolsainmobiliariape\ModuleContact\Http\Livewire\Dashboard\Contact;

use Bolsainmobiliariape\ModuleContact\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithSorting;
use Maatwebsite\Excel;
use Bolsainmobiliariape\ModuleContact\Exports\ContactsExport;

class Index extends Component
{
    use WithPagination;
    use WithSorting;

    public $idDelete;

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
    
    public function delete()
    {
        Contact::destroy($this->idDelete);
        $this->dispatchBrowserEvent('notice', ['type'=>'success','text'=> 'Contacto eliminado con exito!']);
    }

    public function render()
    {
        return view('module-contact::dashboard.contact.index', [
            'contacts' => Contact::orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage),
        ])->layoutData(['header'=>'Contact']);
    }


    public function export()
    {
        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }
}