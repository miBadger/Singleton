# Singleton

[![Build Status](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/badges/build.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Singleton/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/35050baa-90f6-4b69-8f12-1c7127441abe/mini.png)](https://insight.sensiolabs.com/projects/35050baa-90f6-4b69-8f12-1c7127441abe)

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
