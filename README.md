<p align="center">
    <img src="https://banners.beyondco.de/Blade%20Remix%20Icon.png?theme=light&packageManager=composer+require&packageName=andreiio%2Fblade-remix-icon&pattern=architect&style=style_1&description=A+package+to+easily+make+use+of+Remix+Icon+in+your+Laravel+Blade+views.&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" width="1280" title="Social Card Blade Remix Icon">
</p>

# Blade Remix Icon

A package to easily make use of [Remix Icon](https://remixicon.com/) in your Laravel Blade views. Based on [skydiver/blade-icons-remix](https://github.com/skydiver/blade-icons-remix).

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-actions]][link-github-actions]
[![Style CI][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]

For a full list of available icons see [the `resources/svg` directory](./resources/svg) or search

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Install

```console
composer require andreiio/blade-remix-icon
```

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:
```blade
<x-ri-bookmark-fill />
```

You can also pass classes to your icon components:
```blade
<x-ri-mail-line class="w-6 h-6 text-gray-500 fill-current"/>
```

And even use inline styles:
```blade
<x-ri-stack-line style="fill: #F00" />
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```console
php artisan vendor:publish --tag=blade-remix-icon --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-remix-icon/code-fill.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Remix icon uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Testing

```console
composer test
```

## Credits

- [Martin M.][link-author]
- [Andrei Ioniță][link-maintainer]
- [All Contributors][link-contributors]

## License

This project is licensed under the MIT License (MIT) – see the [LICENSE](LICENSE.md) file for details.

[ico-version]: https://img.shields.io/packagist/v/andreiio/blade-remix-icon.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/actions/workflow/status/andreiio/blade-remix-icon/tests.yml?style=flat-square&branch=main
[ico-styleci]: https://styleci.io/repos/365816298/shield
[ico-downloads]: https://img.shields.io/packagist/dt/andreiio/blade-remix-icon.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/andreiio/blade-remix-icon
[link-github-actions]: https://github.com/andreiio/blade-remix-icon/actions
[link-styleci]: https://styleci.io/repos/365816298
[link-downloads]: https://packagist.org/packages/andreiio/blade-remix-icon
[link-author]: https://github.com/skydiver
[link-maintainer]: https://github.com/andreiio
[link-contributors]: ../../contributors
