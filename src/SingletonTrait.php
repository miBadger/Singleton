<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 * @version 1.0.0
 */

namespace miBadger\Singleton;

/**
 * The singleton trait.
 *
 * @see http://en.wikipedia.org/wiki/Singleton_pattern
 * @since 1.0.0
 */
trait SingletonTrait
{
	/** @var static The instance. */
	private static $instance;

	/**
	 * Protected constructor to prevent creating a new instance of the Singleton class from outside the object.
	 */
	protected function __construct() { }

	/**
	 * Protected clone method to prevent cloning of the Singleton instance.
	 */
	protected function __clone() { }

	/**
	 * Protected wakeup method to prevent unserializing of the Singleton instance.
	 */
	protected function __wakeup() { }

	/**
	 * Returns the only instance of the Singleton class.
	 *
	 * @return static the only instance of the Singleton class.
	 */
	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			self::$instance = new static();
		}

		return self::$instance;
	}
}
