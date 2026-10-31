# DM DB driver for Laravel 6|7|8|9 via DM8

## Laravel-DM8

Laravel-DM8 is an Dm Database Driver package for [Laravel](http://laravel.com/). Laravel-DM8 is an extension of [Illuminate/Database](https://github.com/illuminate/database) that uses [DM8](https://eco.dameng.com/document/dm/zh-cn/faq/faq-php.html#PHP-Startup-Unable-to-load-dynamic-library) extension to communicate with Dm. Thanks to @yajra.

## Documentations

- You will find user-friendly and updated documentation here: [Laravel-DM8 Docs](https://github.com/fising/laravel-dm8)
- All about dm and php:[The Underground PHP and Dm Manual](https://eco.dameng.com/document/dm/zh-cn/app-dev/php-php.html)

## Laravel Version Compatibility

 Laravel | PHP
:--------|:-------
 6.x     | ^8.0
 7.x     | ^8.0
 8.x     | ^8.0
 9.x     | ^8.0.2

## Quick Installation

```bash
composer require fising/laravel-dm8
```

## Service Provider

Laravel 6–9 discovers both providers automatically. Register them in `config/app.php` only when package discovery is disabled:

```php
LaravelDm8\Dm8\Dm8ServiceProvider::class,
LaravelDm8\Dm8\Dm8ValidationServiceProvider::class,
```

## Configuration (OPTIONAL)

Finally you can optionally publish a configuration file by running the following Artisan command.
If config file is not publish, the package will automatically use what is declared on your `.env` file database configuration.

```bash
php artisan vendor:publish --tag=dm
```

This will copy the configuration file to `config/dm.php`.

> Then, you can set connection data in your `.env` files:

```ini
DB_CONNECTION=dm
DB_HOST=dm.host
DB_PORT=5236
DB_DATABASE=xe
DB_USERNAME=hr
DB_PASSWORD=hr
DB_CHARSET=UTF8
```

Then run your laravel installation...

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
