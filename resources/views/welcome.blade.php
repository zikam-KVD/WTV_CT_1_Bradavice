<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="koleje-wrapper" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                
                @foreach($colleges as $college)
                <div class="kolej">
                    <div style="color: {{ $college->barva }}">{{ $college->nazev }}</div>

                    <!--progress value="32" max="100"></progress-->
                    <div class="progress">
                        <div class="progress-body" style="background: {{ $college->barva }}; height: {{ $konstanta * $college->body }}px;"></div>
                    </div>

                    <div style="color: {{ $college->barva }}">{{ $college->body }}</div>                                               
                    <img 
                        src="{{ asset('img/' . $college->obrazek_cesta) }}" 
                        alt="{{ $college->nazev }}"
                    >                    
                </div>                     
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
