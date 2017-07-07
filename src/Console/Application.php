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

namespace Phpc\TestFest\Console;

use Symfony\Component\Console\Application as ConsoleApplication;

class Application extends ConsoleApplication
{
    private static $logo = '  ___ _  _ ___   _____       _   ___       _
 | _ \ || | _ \ |_   _|__ __| |_| __|__ __| |_
 |  _/ __ |  _/   | |/ -_|_-<  _| _/ -_|_-<  _|
 |_| |_||_|_|     |_|\___/__/\__|_|\___/__/\__|

';

    public function __construct()
    {
        parent::__construct('phpc/testfest', '1.0');
    }

    public function getHelp()
    {
        return self::$logo . parent::getHelp();
    }
}
