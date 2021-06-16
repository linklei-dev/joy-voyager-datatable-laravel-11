# Joy VoyagerDatatable

This [Laravel](https://laravel.com/)/[Voyager](https://voyager.devdojo.com/) module adds Yajra DataTable to Voyager.

By 🐼 [Ramakant Gangwar](https://github.com/rxcod9).

[![Latest Version](https://img.shields.io/github/v/release/rxcod9/joy-voyager-datatable?style=flat-square)](https://github.com/rxcod9/joy-voyager-datatable/releases)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/rxcod9/joy-voyager-datatable/run-tests?label=tests)
[![Total Downloads](https://img.shields.io/packagist/dt/joy/voyager-datatable.svg?style=flat-square)](https://packagist.org/packages/joy/voyager-datatable)

---

## Prerequisites

*   Composer Installed
*   [Install Laravel](https://laravel.com/docs/installation)
*   [Install Voyager](https://github.com/the-control-group/voyager)

---

## Installation

```bash
# 1. Require this Package in your fresh Laravel/Voyager project
composer require joy/voyager-datatable

# 2. Publish
php artisan vendor:publish --provider="Joy\VoyagerDatatable\VoyagerDatatableServiceProvider"
```

---

## Usage

Installation generates a new route "datatable" [``voyager.{slug}.datatable``] for BREADs, which is also available through url ``/admin/slug/datatable``.

---

## Views Customization

In order to override views delivered by Voyager DataTable, copy contents from ``vendor/joy/voyager-datatable/resources/views`` to the ``views/vendor/joy-voyager-datatable`` directory of your Laravel installation.

## Working Example

You can try laravel demo example from [https://github.com/rxcod9/joy-voyager-datatable-laravel-demo](https://github.com/rxcod9/joy-voyager-datatable-laravel-demo).

## Documentation

Find yourself stuck using the package? Found a bug? Do you have general questions or suggestions for improving the joy voyager-datatable? Feel free to [create an issue on GitHub](https://github.com/rxcod9/joy-voyager-datatable/issues), we'll try to address it as soon as possible.

If you've found a bug regarding security please mail [gangwar.ramakant@gmail.com](mailto:gangwar.ramakant@gmail.com) instead of using the issue tracker.

## Testing

You can run the tests with:

```bash
vendor/bin/phpunit
```

## Upgrading

Please see [UPGRADING](UPGRADING.md) for details.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email [gangwar.ramakant@gmail.com](mailto:gangwar.ramakant@gmail.com) instead of using the issue tracker.

## Credits

- [Ramakant Gangwar](https://github.com/rxcod9)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
