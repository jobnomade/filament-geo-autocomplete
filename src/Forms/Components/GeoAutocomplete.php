<?php

namespace Jobnomade\GeoAutoComplete\Forms\Components;

use Filament\Forms\Components\Field;
use Geocoder\Exception\Exception;
use Geocoder\Provider\Mapbox\Mapbox;
use Geocoder\Query\GeocodeQuery;
use Geocoder\StatefulGeocoder;
use GuzzleHttp\Client;

class GeoAutocomplete extends Field {

    protected string $view = 'geo-autocomplete::components.geo-autocomplete';

    protected array $targetFields = [];

    public function targetFields(array $fields): static
    {
        $this->targetFields = $fields;

        return $this;
    }

    public function getTargetFields(): array
    {
        return $this->targetFields ?: config('geo-autocomplete.fields');
    }

    public function getGeocoder(): StatefulGeocoder
    {
        $httpClient = new Client();
        $provider = new Mapbox($httpClient, config('geo-autocomplete.mapbox.access_token'));

        return new StatefulGeocoder($provider);
    }

    public function getSuggestions(string $query): array
    {
        try {
            $results = $this->getGeocoder()->geocodeQuery(
                GeocodeQuery::create($query)
            );

            return collect($results)->map(function ($result) {
                return [
                    'text' => $result->getFormattedAddress(),
                    'value' => [
                        'street_address' => $result->getStreetNumber() . ' ' . $result->getStreetName(),
                        'city' => $result->getLocality(),
                        'state' => $result->getAdminLevels()->first()?->getName(),
                        'postal_code' => $result->getPostalCode(),
                        'country' => $result->getCountry()->getName(),
                        'latitude' => $result->getCoordinates()->getLatitude(),
                        'longitude' => $result->getCoordinates()->getLongitude(),
                    ],
                ];
            })->toArray();
        }
        catch (Exception $e) {
            return [];
        }
    }
}
