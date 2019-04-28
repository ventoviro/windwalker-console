<?php declare(strict_types=1);
/**
 * Part of Windwalker project Test files.  @codingStandardsIgnoreStart
 *
 * @copyright  Copyright (C) 2019 LYRASOFT Taiwan, Inc.
 * @license    LGPL-2.0-or-later
 */

namespace Windwalker\Console\Test;

use Windwalker\Console\IO\IO;

/**
 * Test class of IO
 *
 * @since 2.0
 */
class IOTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test instance.
     *
     * @var IO
     */
    protected $instance;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $_SERVER['argv'] = '/user/bin/console foo bar baz -a=b -c=d --flower=sakura -fgh';

        $_SERVER['argv'] = explode(' ', $_SERVER['argv']);

        $this->instance = new IO();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @return void
     */
    protected function tearDown(): void
    {
    }

    /**
     * Method to test setArguments().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::setArguments
     */
    public function testGetAndSetArguments()
    {
        $this->instance->setArguments(['foo']);

        $this->assertEquals(['foo'], $this->instance->getArguments());
    }

    /**
     * Method to test shiftArgument().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::shiftArgument
     */
    public function testShiftArgument()
    {
        $this->instance->shiftArgument();

        $this->assertEquals(['bar', 'baz'], $this->instance->getArguments());
    }

    /**
     * Method to test unshiftArgument().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::unshiftArgument
     */
    public function testUnshiftArgument()
    {
        $this->instance->unshiftArgument('wind');

        $this->assertEquals(['wind', 'foo', 'bar', 'baz'], $this->instance->getArguments());
    }

    /**
     * Method to test pushArgument().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::pushArgument
     */
    public function testPushArgument()
    {
        $this->instance->pushArgument('wind');

        $this->assertEquals(['foo', 'bar', 'baz', 'wind'], $this->instance->getArguments());
    }

    /**
     * Method to test popArgument().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::popArgument
     */
    public function testPopArgument()
    {
        $this->instance->popArgument();

        $this->assertEquals(['foo', 'bar'], $this->instance->getArguments());
    }

    /**
     * Method to test addColor().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::addColor
     * @TODO   Implement testAddColor().
     */
    public function testAddColor()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Method to test useColor().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::useColor
     * @TODO   Implement testUseColor().
     */
    public function testUseColor()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Method to test __clone().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::__clone
     * @TODO   Implement test__clone().
     */
    public function test__clone()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Method to test getOutputStream().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::getOutputStream
     * @TODO   Implement testGetOutputStream().
     */
    public function testGetOutputStream()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Method to test setOutputStream().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::setOutputStream
     * @TODO   Implement testSetOutputStream().
     */
    public function testSetOutputStream()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Method to test getErrorStream().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::getErrorStream
     * @TODO   Implement testGetErrorStream().
     */
    public function testGetErrorStream()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Method to test setErrorStream().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::setErrorStream
     * @TODO   Implement testSetErrorStream().
     */
    public function testSetErrorStream()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Method to test getInputStream().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::getInputStream
     * @TODO   Implement testGetInputStream().
     */
    public function testGetInputStream()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Method to test setInputStream().
     *
     * @return void
     *
     * @covers \Windwalker\Console\IO\IO::setInputStream
     * @TODO   Implement testSetInputStream().
     */
    public function testSetInputStream()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
