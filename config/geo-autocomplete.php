<?php

// config for Jobnomade/GeoAutoComplete
return [
    /*
    |--------------------------------------------------------------------------
    | Mapbox Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can configure your Mapbox settings for geocoding.
    |
    */
    'mapbox' => [
        'access_token' => env('MAPBOX_ACCESS_TOKEN'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Fields
    |--------------------------------------------------------------------------
    |
    | These are the default fields that will be populated by the geocoder.
    | You can customize these fields in your form component.
    |
    */
    'fields' => [
        'street_address' => 'street_address',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postal_code',
        'country' => 'country',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
    ],
];
