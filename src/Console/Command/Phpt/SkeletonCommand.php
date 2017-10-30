<?php
/**
 * This file is part of the phpc/testfest project
 *
 * Copyright 2017 PHP Community Foundation
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Phpc\TestFest\Console\Command\Phpt;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SkeletonCommand extends Command
{
    /**
     * Configure phpt:skeleton command
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setName('phpt:skeleton')
            ->setDescription('Generates a skeleton phpt test file to use for writing tests.')
            ->addArgument('phpt_package', InputArgument::OPTIONAL, 'Package for phpt file.')
            ->addArgument('phpt_title', InputArgument::OPTIONAL, 'Title for phpt file.');
    }

    /**
     * Execute phpt:sekeleton command
     *
     * @param InputInterface  $input Input
     * @param OutputInterface $output Output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            '<info>.phpt skeleton</info>',
            ''
        ]);

        $package =  $input->getArgument('phpt_package');
        if (empty($package)) {
            $package = "package";
        }

        $title = $input->getArgument('phpt_title');
        if (empty($title)) {
            $title = "Title.";
        }

        /*
         * write a simple sample test
         */
        $output->writeln([
            '--TEST--',
            "{$package} - {$title}",
            '--FILE--',
            '<?php',
            'echo \'This works \', \'and takes args!\';',
            '?>',
            '--EXPECT--',
            'This works and takes args!',
            ''
        ]);

        $output->writeln([
            '<info>More information about .phpt file structure at:</info>',
            '<info>http://www.phpinternalsbook.com/tests/phpt_file_structure.html</info>',
        ]);
    }
}
