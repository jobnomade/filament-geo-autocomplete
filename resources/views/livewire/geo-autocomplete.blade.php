<div>
    <div class="relative">
        <input
            type="text"
            wire:model.live="search"
            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500"
            placeholder="Search for an address..."
        />

        @if (count($suggestions) > 0)
            <div class="absolute z-50 mt-1 w-full rounded-md bg-white shadow-lg">
                <ul class="max-h-60 overflow-auto py-1">
                    @foreach ($suggestions as $suggestion)
                        <li
                            wire:click="selectAddress({{ json_encode($suggestion) }})"
                            class="cursor-pointer px-4 py-2 hover:bg-gray-100"
                        >
                            {{ $suggestion['text'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div> 