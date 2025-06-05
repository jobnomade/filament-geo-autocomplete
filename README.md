# This is my package filament-geo-autocomplete

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jobnomade/filament-geo-autocomplete.svg?style=flat-square)](https://packagist.org/packages/jobnomade/filament-geo-autocomplete)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jobnomade/filament-geo-autocomplete/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jobnomade/filament-geo-autocomplete/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jobnomade/filament-geo-autocomplete/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jobnomade/filament-geo-autocomplete/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jobnomade/filament-geo-autocomplete.svg?style=flat-square)](https://packagist.org/packages/jobnomade/filament-geo-autocomplete)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jobnomade/filament-geo-autocomplete
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-geo-autocomplete-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-geo-autocomplete-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-geo-autocomplete-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$geoAutoComplete = new Jobnomade\GeoAutoComplete();
echo $geoAutoComplete->echoPhrase('Hello, Jobnomade!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nhan Vu](https://github.com/jobnomade)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
