# Weight conversions in PHP.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/beratdogan6/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/beratdogan6/weight-conversions)
[![Tests](https://img.shields.io/github/actions/workflow/status/beratdogan6/weight-conversions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/beratdogan6/weight-conversions/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/beratdogan6/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/beratdogan6/weight-conversions)

Simple class to convert between common weight units. You can start from any
supported unit and convert it to another using expressive methods.

## Installation

You can install the package via composer:

```bash
composer require beratdogan6/weight-conversions
```

## Usage

```php
use Beratdogan6\WeightConversions\Weight;

$pounds = Weight::kilograms(100)->toPounds(); // 220.462
$kilograms = Weight::pounds(10)->toKilograms(); // 4.53592
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Berat Dogan](https://github.com/beratdogan6)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
