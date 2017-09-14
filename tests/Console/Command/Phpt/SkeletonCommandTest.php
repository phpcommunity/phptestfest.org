<?php
namespace Phpc\TestFest\Test\Console\Command;

use PHPUnit\Framework\TestCase;
use Phpc\TestFest\Console\Application;
use Phpc\TestFest\Console\Command\Phpt\SkeletonCommand;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Skeleton Command Test
 */
class SkeletonCommandTest extends TestCase
{
    /**
     * command tester
     * @var CommandTester
     */
    protected $commandTester;

    /**
     * command name
     * @var string
     */
    protected $commandName = 'phpt:skeleton';

    protected function setUp()
    {
        $application = new Application();
        $application->add(new SkeletonCommand());

        $command = $application->find($this->commandName);
        $this->commandTester = new CommandTester($command);

    }


    /**
     * @link https://symfony.com/doc/current/console.html#testing-commands
     */
    public function testExecute()
    {

        $this->commandTester->execute([
            'command' => $this->commandName,
        ]);

        $output = $this->commandTester->getDisplay();

        $this->assertContains('www.phpinternalsbook.com/tests/phpt_file_structure.html', $output);
    }

    /**
     * @link https://symfony.com/doc/current/console.html#testing-commands
     */
    public function testExecuteArgPackage()
    {

        $this->commandTester->execute([
            'command' => $this->commandName,
            'phpt_package' => 'foo'
        ]);

        $output = $this->commandTester->getDisplay();

        $this->assertContains('foo - Title.', $output);
    }
    /**
     * @link https://symfony.com/doc/current/console.html#testing-commands
     */
    public function testExecuteArgTitle()
    {

        $this->commandTester->execute([
            'command' => $this->commandName,
            'phpt_title' => 'bar'
        ]);

        $output = $this->commandTester->getDisplay();

        $this->assertContains('package - bar', $output);
    }

    /**
     * @link https://symfony.com/doc/current/console.html#testing-commands
     */
    public function testExecuteArgsPackageTitle()
    {

        $this->commandTester->execute([
            'command' => $this->commandName,
            'phpt_package' => 'foo',
            'phpt_title' => 'bar'
        ]);

        $output = $this->commandTester->getDisplay();

        $this->assertContains('foo - bar', $output);
    }



}
