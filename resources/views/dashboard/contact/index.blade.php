<div>
    <x-details title="Detalles de contacto" description="Muestra los detalles que el cliente llenó en el formulario">
        @foreach(config('module-contact.fields') as $key => $item)
        <x-details.item :title="ucfirst($item)" :description="$contact->{$item}" :gray="$key%2!==0?true:false" />
        @endforeach
    </x-details>
</div>