<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2014 {ORGANIZATION}. All rights reserved.
 * @license    GNU Lesser General Public License version 2.1 or later.
 */

namespace Windwalker\Console\IO;

/**
 * The IOFactory class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class IOFactory
{
	/**
	 * Property io.
	 *
	 * @var IO
	 */
	public static $io;

	/**
	 * getIO
	 *
	 * @return  IO
	 */
	public static function getIO()
	{
		if (!static::$io)
		{
			static::$io = new IO;
		}

		return static::$io;
	}
}
