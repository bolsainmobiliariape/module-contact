<?php

namespace Bolsainmobiliariape\ModuleContact\Exports;

use Bolsainmobiliariape\ModuleContact\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contact::select(['id']+config('module-contact.fields')+['created_at'])->get();
    }

    public function headings() : array
    {
        $arra = config('module-contact.fields');

        $merge = array_merge(array('id'), $arra);
        $merge = array_merge($merge, a)
        return array('#') + $arra + array('Hora / Fecha');
    }
}
