# Detect User Agent

[![Packagist](https://img.shields.io/packagist/dt/sempro/detect-user-agent.svg?style=flat-square)](https://packagist.org/packages/sempro/detect-user-agent)
[![Packagist](https://img.shields.io/packagist/v/sempro/detect-user-agent.svg?style=flat-square)](https://packagist.org/packages/sempro/detect-user-agent)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)

Detects what user agent the browser is using.

## Installation

You can install the package via composer:

```bash
composer require sempro/detect-user-agent
```

If you are using a version below 5.5 of laravel, then you will also have to add the service provider to the `app.php` config file.

```php
...
Sempro\DetectUserAgent\Providers\DetectUserAgentServiceProvider::class,
...
```

## Usage

```php
use Sempro\DetectUserAgent\Contracts\DetectUserAgent;

...

public function index(DetectUserAgent $userAgent)
{
    return $userAgent->isMobile();
}
```

See source file for an overview of what methods are available.

## Credits

- [Runar Jørgensen](https://github.com/ventrec)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.