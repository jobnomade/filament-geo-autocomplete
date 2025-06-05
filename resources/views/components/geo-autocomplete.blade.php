<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div
        x-data="{
            state: $wire.{{ $applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')') }},
            suggestions: [],
            search: '',
            selectedAddress: null,
            init() {
                this.$watch('search', (value) => {
                    if (value.length < 3) {
                        this.suggestions = [];
                        return;
                    }
                    
                    this.$wire.getSuggestions(value).then((results) => {
                        this.suggestions = results;
                    });
                });
            },
            selectAddress(address) {
                this.selectedAddress = address;
                this.search = address.text;
                this.suggestions = [];
                this.$wire.selectAddress(address);
            }
        }"
        class="relative"
    >
        <input
            type="text"
            x-model="search"
            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500"
            placeholder="Search for an address..."
        />

        <div
            x-show="suggestions.length > 0"
            x-transition
            class="absolute z-50 mt-1 w-full rounded-md bg-white shadow-lg"
        >
            <ul class="max-h-60 overflow-auto py-1">
                <template x-for="suggestion in suggestions" :key="suggestion.text">
                    <li
                        @click="selectAddress(suggestion)"
                        class="cursor-pointer px-4 py-2 hover:bg-gray-100"
                        x-text="suggestion.text"
                    ></li>
                </template>
            </ul>
        </div>
    </div>
</x-dynamic-component> 