<div>
    <div class="flex justify-between gap-4 p-4">
        @foreach ($koleje as $kolej)
            <div class="flex flex-col text-center">
                <strong>{{ $kolej->nazev }}</strong>
                <span>{{ $kolej->body }}</span>
            </div>
        @endforeach
    </div>

    @if(null != $message)
    <div class="text-center p-4">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="flex justify-between p-4 mt-8">
        <div>
            <select wire:model.lazy="selectedHouse" id="selectedHouse">
                <option value="0" hidden selected>Vyber kolej...</option>
                @foreach ($koleje as $kolej)
                    <option value="{{ $kolej->id }}">{{ $kolej->nazev }}</option>
                @endforeach
            </select>
            <x-input-error for="selectedHouse" />
        </div>
        <div>
            <input type="number" wire:model.lazy="points">
            <x-input-error for="points" />
        </div>
        <div>
            @if($selectedHouse != 0 && $points != 0)
            <x-button wire:click="editPoints">
                Uprav body
            </x-button>
            @endif
        </div>
    </div>
</div>
