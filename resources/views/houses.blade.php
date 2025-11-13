<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($houses as $kolej)
                    <form action="{{ route('admin.house.edit', $kolej->id) }}" method="POST" class="flex w-full justify-between gap-2">
                        @csrf
                        <div>
                            <x-label for="name" value="Kolej" />
                            <x-input type="text" id="name" name="name" value="{{ $kolej->nazev }}" />
                            <x-input-error for="name" />
                        </div>
                        <div>
                            <input type="number" id="body" name="points" value="{{ $kolej->body }}">
                            <x-input-error for="body" />
                        </div>
                        <div>
                            <input type="color" id="color" name="color" value="{{ $kolej->barva }}">
                            <x-input-error for="color" />
                        </div>
                        <div>
                            <img style="width:60px;" src="{{ asset('img/' . $kolej->obrazek_cesta) }}" alt="obr">
                        </div>
                        <div>
                            <x-button type="submit">
                                Upravit
                            </x-button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
