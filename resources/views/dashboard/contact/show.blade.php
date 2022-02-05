<div>
    <table>
        <th>
            @foreach(config('module-contact.fields') as $field)
            <tr>{{ $field }}</tr>
            @endforeach
        </th>
    </table>
</div>