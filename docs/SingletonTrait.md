# SingletonTrait

The singleton trait.

## Example(s)

```php
<?php

use miBadger\Singleton\SingletonTrait;

/**
 * The example class
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

/**
 * Protected constructor to prevent creating a new instance of the Singleton class from outside the object.
 */
new Example();

/**
 * Protected clone method to prevent cloning of the Singleton instance.
 */
clone $singleton;

/**
 * Protected wakeup method to prevent unserializing of the Singleton instance.
 */
unserialize(serialize($singleton));
```
