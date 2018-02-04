<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Singleton;

use PHPUnit\Framework\TestCase;

/**
 * The singleton trait test class.
 *
 * @since 1.0.0
 */
class SingletonTraitTest extends TestCase
{
	public function testConstructor()
	{
		$reflection = new \ReflectionMethod('miBadger\Singleton\SingletonTrait', '__construct');
		$this->assertFalse($reflection->isPublic());
	}

	public function testClone()
	{
		$reflection = new \ReflectionMethod('miBadger\Singleton\SingletonTrait', '__clone');
		$this->assertFalse($reflection->isPublic());
	}

	public function testWakeUp()
	{
		$reflection = new \ReflectionMethod('miBadger\Singleton\SingletonTrait', '__wakeup');
		$this->assertFalse($reflection->isPublic());
	}

	public function testGetInstance()
	{
		$this->assertSame(SingletonTraitTestMock::getInstance(), SingletonTraitTestMock::getInstance());
	}
}

/**
 * The singleton trait test mock class.
 */
class SingletonTraitTestMock
{
	use SingletonTrait;
}
