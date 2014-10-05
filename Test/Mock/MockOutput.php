<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2008 - 2014 Asikart.com. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Windwalker\Console\Test\Mock;

use Windwalker\IO\Cli\Output\CliOutput;

/**
 * The MockOutput class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class MockOutput extends CliOutput
{
	/**
	 * Property output.
	 *
	 * @var  string
	 */
	public $output = '';

	/**
	 * Write a string to standard output.
	 *
	 * @param   string   $text  The text to display.
	 * @param   boolean  $nl    True (default) to append a new line at the end of the output string.
	 *
	 * @since   {DEPLOY_VERSION}
	 *
	 * @return $this
	 */
	public function out($text = '', $nl = true)
	{
		$this->output .= $this->processor->process($text) . ($nl ? "\n" : null);

		return $this;
	}

	/**
	 * Write a string to standard error output.
	 *
	 * @param   string   $text  The text to display.
	 * @param   boolean  $nl    True (default) to append a new line at the end of the output string.
	 *
	 * @since   {DEPLOY_VERSION}
	 *
	 * @return $this
	 */
	public function err($text = '', $nl = true)
	{
		$this->output .= $this->processor->process($text) . ($nl ? "\n" : null);

		return $this;
	}

	/**
	 * Get test output.
	 *
	 * @return string
	 *
	 * @since  {DEPLOY_VERSION}
	 */
	public function getOutput()
	{
		return $this->output;
	}

	/**
	 * Set test outpur.
	 *
	 * @param   string  $output  The output string.
	 *
	 * @return $this
	 *
	 * @since  {DEPLOY_VERSION}
	 */
	public function setOutput($output)
	{
		$this->output = $output;

		return $this;
	}
}
