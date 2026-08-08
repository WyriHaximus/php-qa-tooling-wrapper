# Wrapper around QA tooling repositories

![Continuous Integration](https://github.com/WyriHaximus/php-qa-tooling-wrapper/workflows/Continuous%20Integration/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/WyriHaximus/qa-tooling-wrapper/v/stable.png)](https://packagist.org/packages/wyrihaximus/qa-tooling-wrapper)
[![Total Downloads](https://poser.pugx.org/WyriHaximus/qa-tooling-wrapper/downloads.png)](https://packagist.org/packages/wyrihaximus/qa-tooling-wrapper)
[![License](https://poser.pugx.org/WyriHaximus/qa-tooling-wrapper/license.png)](https://packagist.org/packages/wyrihaximus/qa-tooling-wrapper)

Provides all QA dependencies used by [`wyrihaximus/test-utilities`](https://github.com/WyriHaximus/php-test-utilities) as a single Composer package. Extension packages such as [`wyrihaximus/phpstan-no-safe`](https://github.com/WyriHaximus/phpstan-no-safe) can depend on this wrapper for their toolchain without creating circular dependencies through `test-utilities`.

# Installation

To install via [Composer](http://getcomposer.org/), use the command below, it will automatically detect the latest version and bind it with `^`.

```bash
composer require --dev wyrihaximus/qa-tooling-wrapper
```

# Usage

Works out of the box when combined with [`wyrihaximus/makefiles`](https://github.com/WyriHaximus/php-makefiles) or your own QA configuration.

# Included tooling

<!-- included-tooling:start -->
* [`ergebnis/composer-normalize`](https://packagist.org/packages/ergebnis/composer-normalize)
* [`ergebnis/phpunit-slow-test-detector`](https://packagist.org/packages/ergebnis/phpunit-slow-test-detector)
* [`icanhazstring/composer-unused`](https://packagist.org/packages/icanhazstring/composer-unused)
* [`infection/infection`](https://packagist.org/packages/infection/infection)
* [`maglnet/composer-require-checker`](https://packagist.org/packages/maglnet/composer-require-checker)
* [`mockery/mockery`](https://packagist.org/packages/mockery/mockery)
* [`php-parallel-lint/php-console-highlighter`](https://packagist.org/packages/php-parallel-lint/php-console-highlighter)
* [`php-parallel-lint/php-parallel-lint`](https://packagist.org/packages/php-parallel-lint/php-parallel-lint)
* [`phpstan/phpstan`](https://packagist.org/packages/phpstan/phpstan)
* [`phpunit/phpunit`](https://packagist.org/packages/phpunit/phpunit)
* [`rector/rector`](https://packagist.org/packages/rector/rector)
* [`roave/backward-compatibility-check`](https://packagist.org/packages/roave/backward-compatibility-check)
* [`shipmonk/coverage-guard`](https://packagist.org/packages/shipmonk/coverage-guard)
* [`squizlabs/php_codesniffer`](https://packagist.org/packages/squizlabs/php_codesniffer)
* [`wyrihaximus/coding-standard`](https://packagist.org/packages/wyrihaximus/coding-standard)
<!-- included-tooling:end -->

# License

Copyright (c) 2026 Cees-Jan Kiewiet

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
