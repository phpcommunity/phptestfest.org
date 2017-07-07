<?php
namespace Phpc\TestFest\Test\Console\Command;

use PHPUnit\Framework\TestCase;
use Phpc\TestFest\Console\Application;
use Phpc\TestFest\Console\Command\AboutCommand;
use Symfony\Component\Console\Tester\CommandTester;

class AboutCommandTest extends TestCase
{
    /**
     * @link https://symfony.com/doc/current/console.html#testing-commands
     */
    public function testExecute()
    {
        $application = new Application();
        $application->add(new AboutCommand());

        $command = $application->find('about');
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'command' => $command->getName(),
        ]);

        $output = $commandTester->getDisplay();

        $this->assertContains('https://phptestfest.org', $output);
    }
}
