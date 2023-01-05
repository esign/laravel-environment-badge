# Display a warning badge for certain app environments

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-environment-badge.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-environment-badge)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-environment-badge.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-environment-badge)
![GitHub Actions](https://github.com/esign/laravel-environment-badge/actions/workflows/main.yml/badge.svg)

A short intro about the package.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-environment-badge
```

The package will automatically register a service provider.

Next up, you can publish the configuration file:
```bash
php artisan vendor:publish --provider="Esign\EnvironmentBadge\EnvironmentBadgeServiceProvider" --tag="config"
```

## Usage

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
