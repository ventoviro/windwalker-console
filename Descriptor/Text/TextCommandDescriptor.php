<?php declare(strict_types=1);
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    LGPL-2.0-or-later
 */

namespace Windwalker\Console\Descriptor\Text;

use Windwalker\Console\Command\AbstractCommand;
use Windwalker\Console\Command\Command;
use Windwalker\Console\Descriptor\AbstractDescriptor;

/**
 * Class TextCommandDescriptor
 *
 * @since    2.0
 */
class TextCommandDescriptor extends AbstractDescriptor
{
    /**
     * Offset that between every commands and their descriptions.
     *
     * @var int
     *
     * @since  2.0
     */
    protected $offsetAfterCommand = 4;

    /**
     * Template of every commands.
     *
     * @var string
     *
     * @since  2.0
     */
    protected $template = <<<EOF
  <info>%-{WIDTH}s</info>%s
EOF;

    /**
     * The max length of command.
     *
     * @var int
     *
     * @since  2.0
     */
    protected $maxLength = 0;

    /**
     * Render an item description.
     *
     * @param   mixed $command The item to be described.
     *
     * @throws  \InvalidArgumentException
     * @return  string  Rendered description.
     *
     * @since  2.0
     */
    protected function renderItem($command)
    {
        if (!($command instanceof AbstractCommand)) {
            throw new \InvalidArgumentException('Command descriptor need Command object to describe it.');
        }

        /** @var Command $command */
        $name = $command->getName();
        $description = $command->getDescription() ?: 'No description';

        $template = str_replace('{WIDTH}', (string) ($this->maxLength + $this->offsetAfterCommand), $this->template);

        // Sets the body indent.
        $body = [];

        $description = explode("\n", $description);

        $line1 = array_shift($description);
        $body[] = sprintf($template, $name, $line1);

        foreach ($description as $line) {
            $line = trim($line);
            $line = sprintf($template, '', $line);
            $body[] = $line;
        }

        return implode("\n", $body);
    }

    /**
     * Render all items description.
     *
     * @return  string
     *
     * @since  2.0
     */
    public function render()
    {
        // Count the max command length as column width.
        foreach ($this->items as $item) {
            /** @var $item AbstractCommand */
            $length = strlen((string) $item->getName());

            if ($length > $this->maxLength) {
                $this->maxLength = $length;
            }
        }

        return parent::render();
    }
}
