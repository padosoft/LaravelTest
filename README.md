# LARAVEL COMPOSER SECURITY COMMAND

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
[![SensioLabsInsight][ico-sensiolab]][link-sensiolab]

This is a Laravel 5.1.x/5.2.x package that provides an artisan command for testing security vulnerabilties into your composer.lock files.


Table of Contents
=================

  * [LARAVEL ******](#******)
  * [Table of Contents](#table-of-contents)
  * [PREREQUISITES](#prerequisites)
    * [INSTALL](#install)
    * [USAGE](#usage)
      * [EXAMPLE:](#example)
    * [SCHEDULE COMMAND](#schedule-command)
    * [SCREENSHOOTS](#screenshoots)
  * [Testing](#testing)
  * [Contributing](#contributing)
  * [Security](#security)
  * [Credits](#credits)
  * [About Padosoft](#about-padosoft)
  * [License](#license)

  
# PREREQUISITES


## INSTALL

This package can be installed through Composer.

``` bash
composer require padosoft/@@@package
``` 
You must install this service provider.

``` php
// config/app.php
'provider' => [
    ...
    Padosoft\@@@namespace\@@@provider::class,
    ...
];
```
You don't need to register the command in app/Console/Kernel.php, because it provides by ComposerSecurtyCheckServiceProvider register() method.

You can publish the config file of this package with this command:
``` bash
php artisan vendor:publish --provider="Padosoft\@@@namespace\@@@provider"
```
The following config file will be published in `config/@@@package.php`
``` php

```

## USAGE

When the installation is done you can easily run command to print help:


### EXAMPLE:



## SCHEDULE COMMAND



## SCREENSHOOTS


# Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

# Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

# Credits

- [Lorenzo Padovani](https://github.com/lopadova)
- [All contributors](https://github.com/thephpleague/skeleton/contributors)

# About Padosoft
Padosoft is a software house based in Florence, Italy. Specialized in E-commerce and web sites.

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/padosoft/@@@package.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/padosoft/@@@package/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/padosoft/@@@package.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/padosoft/@@@package.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/padosoft/@@@package.svg?style=flat-square
[ico-sensiolab]: https://insight.sensiolabs.com/projects/******/small.png

[link-packagist]: https://packagist.org/packages/padosoft/@@@package
[link-travis]: https://travis-ci.org/padosoft/@@@package
[link-scrutinizer]: https://scrutinizer-ci.com/g/padosoft/@@@package/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/padosoft/@@@package
[link-downloads]: https://packagist.org/packages/padosoft/@@@package
[link-sensiolab]: https://insight.sensiolabs.com/projects/******
[link-author]: https://github.com/lopadova
[link-contributors]: ../../contributors

