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

class SkeletonCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('phpt:skeleton')
            ->setDescription('Generates a skeleton phpt test file to use for writing tests.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            '',
            'This command doesn\'t do anything right now, but you could imagine that',
            'it generates a phpt test file for you to use.',
            '',
            'Can you help implement this command? If so, fork the PHP TestFest project:',
            'https://github.com/phpcommunity/phptestfest.org',
            '',
        ]);
    }
}
