# goodechilde/gc-tags

Our common contact fields for people and places

Changes between versions will be tracked in the [CHANGELOG](CHANGELOG.md).

## Installation

```bash
composer require goodechilde/gc-tags
```
```bash
php artisan vendor:publish --tag=gc-tags 
```

## Usage
It's as simple as adding the following traits to any model you want to have tags
```bash
    use HasTags;
```

It is recommended to create a controller for to get and set TagTypes

## Feedback

Please feel free to give us feedback or any improvement suggestions.

## Security Vulnerabilities

If you discover a security vulnerability within this package, please send an e-mail to Goodechilde Development via [devs@eq8.in](mailto:devs@eq8.in). All security vulnerabilities will be promptly addressed.

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
