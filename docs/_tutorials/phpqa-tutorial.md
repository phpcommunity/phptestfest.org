---
layout: page
title: Using docker-phpqa
date: 2017-07-10 08:35:43 +00:00
updated: 2017-07-24 22:22:00 +00:00
author:
    name: Bruno Ricardo Siqueira, Joao Paulo Vendramini Martins, & Ivan Rosolen
    website: http://herdphp.org
    twitter: https://twitter.com/herdphp
image:
    url: /images/photos/lucas-gallone-228252.jpg
    alt: Colorful graffiti art
    title: Thousand Colors by Lucas Gallone
    credit: Photo by [Lucas Gallone](https://unsplash.com/photos/PVw_vtpCGaM).
summary: >
    Docker tools to easily create and run tests for the [PHP-SRC](https://github.com/php/php-src). The intent of this library is to help any PHP 
    developer to create PHPT tests for the language engine and its core extensions.
---
## How to get it?

1. You will **need** to have [docker][docker] installed on your machine.

2. Run our installer:

````bash
curl -s https://raw.githubusercontent.com/herdphp/docker-phpqa/master/bin/installer.sh | bash
````

Start PHPTesting!!!

## How to use it?

### To generate new PHPT test files

The [generate-phpt][generate-phpt] tool wrapped by `docker-phpqa` is a developer tool 
[that lives inside of PHP-SRC repository][generate-phpt]. Its usage is very simple and the intent is to bootstrap PHPT
creation.

````
Usage:
phpqa generate [PHPT_DIR] -f <function_name> |-c <class_name> -m <method_name> -b|e|v [-s skipif:ini:clean:done] [-k win|notwin|64b|not64b] [-x ext]

Where:
-f function_name ................. Name of PHP function, eg cos
-c class name .....................Name of class, eg DOMDocument
-m method name ....................Name of method, eg createAttribute
-b ............................... Generate basic tests
-e ............................... Generate error tests
-v ............................... Generate variation tests
-s sections....................... Create optional sections, colon separated list
-k skipif key..................... Skipif option, only used if -s skipif is used.
-x extension.......................Skipif option, specify extension to check for
-h ............................... Print this message
````

If you want to see the help you can just use:

````bash
phpqa generate -h
````

If you want to create a *basic* PHPT test for the [`ucfirst` function][php-function-ucfirst]:

````bash
phpqa generate -f ucfirst -b
````

This will create a template PHPT file for the function ucfirst inside of your PHPT default folder. If you want to choose
the PHPT directory where the files are generated you can pass if as the first argument of the generate command:

````bash
phpqa generate /path/to/phpt/dir -f ucfirst -b
````

### To run your created tests against multiple PHP versions

1. Write a PHPT test in **any folder**;
2. Run the `phpqa` command passing as arguments the filepath (relative or full) and the PHP version to run the test (72, 71, 70, 56, 55):

````bash
# without a version the test will run against PHP 7.1 codebase
phpqa run phpt/examples/closure_061.phpt
# with a version the test will run against the specified version
phpqa run phpt/examples/closure_061.phpt 56
# if you want you can pass `all` as second argument and the test will run against all versions
phpqa run phpt/examples/closure_061.phpt all
````

## PHP versions available

PHP 5.5, 5.6, 7.0, 7.1 and 7.2 (Beta1) are fully available and supported;

## Contributing

If you notice any bug or typo, please feel free to [create an issue and/or open a pull request][docker-phpqa]
with the fix.

[generate-phpt]: https://github.com/php/php-src/tree/master/scripts/dev/generate-phpt
[php-function-ucfirst]: http://php.net/manual/en/function.ucfirst.php
[docker-phpqa]: https://github.com/herdphp/docker-phpqa
[docker]: https://www.docker.com/community-edition