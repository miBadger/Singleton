# SingletonTrait

The singleton trait.

## Example(s)

```php
// Singleton example
use miBadger\Singleton\SingletonTrait;

class SingletonExample
{
	use SingletonTrait;
}

// Get singleton instance
SingletonExample::getInstance();

// Can't construct a singleton object.
$singleton = new SingletonExample();

// Can't clone a singleton object.
$singleton = clone SingletonExample::getInstance();

// Can't wake up a singleton object.
$singleton = unserialize(serialize(SingletonExample::getInstance()));
```
