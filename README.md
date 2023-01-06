# Display a warning badge for certain app environments

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-environment-badge.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-environment-badge)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-environment-badge.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-environment-badge)
![GitHub Actions](https://github.com/esign/laravel-environment-badge/actions/workflows/main.yml/badge.svg)

Display a badge for testing or staging environments.
This package is Esign-branded, feel free to fork and change it to fit your own needs.

## Installation
You can install the package via composer:

```bash
composer require esign/laravel-environment-badge
```

The package will automatically register a service provider.

Next up, you can optionally publish the configuration and language files:
```bash
php artisan vendor:publish --provider="Esign\EnvironmentBadge\EnvironmentBadgeServiceProvider" --tag="config"
php artisan vendor:publish --provider="Esign\EnvironmentBadge\EnvironmentBadgeServiceProvider" --tag="lang"
```

## Usage
To display the environment badge you may use the view component that ships with this package:
```blade
<x-environment-badge />
```

To enable this badge for certain environments you may set the `ENVIRONMENT_BADGE_ENABLED` environment variable to true:
```env
ENVIRONMENT_BADGE_ENABLED=true
```

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
