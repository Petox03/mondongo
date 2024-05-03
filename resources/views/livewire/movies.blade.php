<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    @livewire('CreateMovie')

    <input type="search" id="default-search" wire:model.live="search"
        class="mb-5 block w-full ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="¿Qué estás buscando?" />

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th class="px-6 py-3">Género</th>
                <th scope="col" class="px-6 py-3">Duración</th>
                <th class="px-6 py-3">Director</th>
                <th scope="col" class="px-6 py-3">Sinopsis</th>
                <th class="px-6 py-3">Acción</th>

            </tr>
        </thead>
        <tbody>
            {{-- Datos de la DB --}}
            @if ($movies->count())
                @foreach ($movies as $movie)
                    <tr wire:key="{{ $movie->id }}"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $movie->name }}</th>
                        <th class="px-6 py-4">{{ $movie->genre }}</th>
                        <th class="px-6 py-4 after:content-['_min.']">{{ $movie->duration }}</th>
                        <th class="px-6 py-4" x-data="{ show: false }">{{ $movie->director }}</th>
                        <th class="px-6 py-4">{{ $movie->synopsis }}</th>
                        <th class="px-6 py-4 grid gap-2">
                            <a href="/view/{{ $movie->id }}"
                                class="text-sky-400 hover:text-sky-600 hover:underline">Ver</a>

                            @livewire(EditMovie::class, ['id' => $movie->id, key('edit-' . $movie->id)])

                            @livewire(DeleteMovie::class, ['id' => $movie->id], key('delete-' . $movie->id))
                        </th>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
