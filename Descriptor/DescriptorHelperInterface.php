<?php declare(strict_types=1);
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    LGPL-2.0-or-later
 */

namespace Windwalker\Console\Descriptor;

use Windwalker\Console\Command\AbstractCommand;

/**
 * A descriptor helper to get different descriptor and render it.
 *
 * @since  2.0
 */
interface DescriptorHelperInterface
{
    /**
     * Describe a command detail.
     *
     * @param   AbstractCommand $command The command to described.
     *
     * @return  string  Return the described text.
     *
     * @since   2.0
     */
    public function describe(AbstractCommand $command);
}
