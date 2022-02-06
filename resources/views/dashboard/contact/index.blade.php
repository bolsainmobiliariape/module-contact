<div x-data="{openModal: false}" class="dark:bg-gray-800">

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <x-table.table>
                    <x-slot name="head">                        
                        <x-table.heading>#</x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('contacted')" :direction="$sortField === 'contacted' ? $sortDirection : null">Contactado</x-table.heading>
                        <x-table.heading>Nombre</x-table.heading>
                        <x-table.heading>Telefono</x-table.heading>
                        <x-table.heading >Asunto</x-table.heading>
                        <x-table.heading>Acciones</x-table.heading>
                    </x-slot>

                    <x-slot name="body">
                        @forelse($contacts as $key => $asesor)
                            <x-table.row wire:loading.class="opacity-50">
                                <x-table.cell>
                                    {{$asesor->id}}
                                </x-table.cell>
                                <x-table.cell>
                                    <input wire:click="markAsContacted({{$asesor->id}})" type="checkbox" name="contacted"  {{ $asesor->contacted ? 'checked': ''}}>
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $asesor->name }}
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $asesor->phone }}
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $asesor->asunto }}
                                </x-table.cell>
                                <x-table.cell>
                                    <a href="{{ route('dashboard.contact.show', $asesor->id) }}" class="px-4 py-1 text-md bg-blue-500 text-white rounded-md hover:bg-green-700">Ver</a>

                                    {{-- <button wire:click="$set('idDelete', {{$asesor->id}})" x-on:click="openModal = true" class="appearance-none text-md px-4 py-1 bg-red-500 text-white rounded-md hover:bg-red-700">Delete</button> --}}
                                    
                                </x-table.cell>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.cell colspan="6">
                                    <div class="flex justify-center items-center text-xl font-bold text-gray-500">No hay
                                        resultados...
                                    </div>
                                </x-table.cell>
                            </x-table.row>
                        @endforelse
                    </x-slot>
                </x-table.table>

                <!-- modal confirm delete -->
                <div x-show="openModal" class="bg-black absolute inset-0 bg-opacity-20 flex justify-center items-center z-40">
                    <div class="bg-white text-gray-500 dark:bg-gray-600 dark:text-gray-300 px-4 py-2 rounded-md shadow-xl w-1/3">
                        <!-- header modal -->
                        <div class="flex justify-between items-center">
                        <h3 class="text-lg font-bold">Confirm delete</h3>
                        <svg x-on:click="openModal = false" class="w-5 h-5 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </div>

                        <!-- body modal -->
                        <div class="my-2">
                        <p class="font-medium">Are you sure delete this register?</p>
                        </div>

                        <!-- footer modal -->
                        <div class="flex justify-center space-x-3">
                        <button x-on:click="openModal = false" class="bg-blue-500 rounded px-4 py-1 hover:bg-blue-400 text-white">Cancel</button>
                        {{-- <button wire:click="delete({{$idDelete}})" x-on:click="openModal = false" class="bg-red-600 hover:bg-red-500 rounded px-4 py-1 text-white">Delete</button> --}}
                        </div>
                    </div>
                </div>
                <!-- end modal -->
            </div>
        </div>
    </div>
</div>