<div>
    <x-details title="Detalles de contacto" description="Muestra los detalles que el cliente llenó en el formulario">
        <x-slot name="action">
            <input wire:click="markAsContacted({{$contact->id}})" type="checkbox" name="contacted"  {{ $contact->contacted ? 'checked': ''}}> Contactado
        </x-slot>
        @foreach(config('module-contact.fields') as $key => $item)
        <x-details.item :title="$names[$item]" :description="$contact->{$item}" :gray="$key%2!==0?true:false" />
        @endforeach
    </x-details>
</div>