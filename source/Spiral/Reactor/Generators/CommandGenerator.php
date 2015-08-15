<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 * @copyright �2009-2015
 */
namespace Spiral\Reactor\Generators;

use Spiral\Console\Command;
use Spiral\Reactor\Generators\Prototypes\AbstractGenerator;

/**
 * Generate console command.
 */
class CommandGenerator extends AbstractGenerator
{
    /**
     * {@inheritdoc}
     */
    protected function generate()
    {
        $this->file->addUse(Command::class);
        $this->class->setParent('Command');

        $this->class->property('name', ["Command name.", "", "@var string"]);
        $this->class->property('description', ["Command description.", "", "@var string"]);

        $this->class->method('perform')->setComment("Perform command.");
    }

    /**
     * Set command name.
     *
     * @param string $name
     */
    public function setCommand($name)
    {
        $this->class->property('name')->setDefault(true, $name);
    }

    /**
     * Set command description.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->class->property('description')->setDefault(true, $description);
    }
}