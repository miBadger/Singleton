# Singleton

[![Build Status](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/badges/build.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/?branch=master)

The Singleton Component.

## Example

```php
<?php

use miBadger\Singleton\SingletonTrait;

/**
 * The example class.
 */
class Example
{
	use SingletonTrait;
}
```

```php
<?php

/**
 * Returns the only instance of the Singleton class.
 */
$singleton = Example::getInstance();
```
