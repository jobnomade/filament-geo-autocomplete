<?php

namespace Jobnomade\GeoAutoComplete\Livewire;

use Livewire\Component;

class GeoAutocomplete extends Component
{
    public string $search = '';

    public array $suggestions = [];

    public array $selectedAddress = [];

    public function updatedSearch()
    {
        if (strlen($this->search) < 3) {
            $this->suggestions = [];

            return;
        }

        $this->suggestions = $this->getSuggestions($this->search);
    }

    public function selectAddress(array $address)
    {
        $this->selectedAddress = $address;
        $this->search = $address['text'];
        $this->suggestions = [];

        $this->dispatch('address-selected', $address);
    }

    protected function getSuggestions(string $query): array
    {
        return app(GeoAutocomplete::class)->getSuggestions($query);
    }

    public function render()
    {
        return view('geo-autocomplete::livewire.geo-autocomplete');
    }
}
