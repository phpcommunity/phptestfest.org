---
layout: page
title: Creating New Test Files
date: 2017-07-09 15:32:43 -05:00
author:
    name: PHP QA Team
    website: https://qa.php.net
image:
    url: /images/photos/mahir-uysal-303105.jpg
    alt: Hot air balloons
    title: BALLOONS by Mahir Uysal
    credit: Photo by [Mahir Uysal](https://unsplash.com/photos/pDfMZIsHV68).
wooble:
    message: "Create new phpt files!"
    class: right
summary: >
    How create a phpt test file. Please help us create other PHP TestFest tutorials.
---

_This tutorial is taken from "[Creating new test files](https://qa.php.net/write-test.php)" from the [PHP Quality Assurance Team Web Page](https://qa.php.net).
The PHP Quality Assurance Team supports the PHP Development Team by providing them with information on compatibility and stability issues._

## phpt Test Basics

The first thing you need to know about tests is that we need more!!! Although PHP works just great 99.99% of the time, not having a very comprehensive test suite means that we take more risks every time we add to or modify the PHP implementation. The second thing you need to know is that if you can write PHP you can write tests. Thirdly—we are a friendly and welcoming community, don't be scared about writing to ([php-qa@lists.php.net](mailto:php-qa@lists.php.net))—we won't bite!

*   **So what are phpt tests?**

    A phpt test is a little script used by the php internal and quality assurance teams to test PHP's functionality. It can be used with new releases to make sure they can do all the things that previous releases can, or to help find bugs in current releases. By writing phpt tests you are helping to make PHP more stable.

*   **What skills are needed to write a phpt test?**

    All that is really needed to write a phpt test is a basic understanding of the PHP language, a text editor, and a way to get the results of your code. That is it. So if you have been writing and running PHP scripts already—you have everything you need.

*   **What do you write phpt tests on?**

    Basically you can write a phpt test on one of the various php functions available. You can write a test on a basic language function (a string function or an array function), or a function provided by one of PHP's numerous extensions (a mysql function or a image function or a mcrypt function).

    You can find out what functions already have phpt tests by looking in the [html version](http://git.php.net/?p=php-src.git;a=tree;) of the git repository (ext/standard/tests/ is a good place to start looking—though not _all_ the tests currently written are in there). If you look at the [gcov pages](http://gcov.php.net) you can see which functions have lots of tests and which need more, although these pages only show which lines of code are covered by test cases so even if the coverage looks good there may be more interesting tests to write—for example covering error cases. There is also a table [here](https://qa.php.net/tested-methods.php) that shows which functions and methods are called from PHPT tests.

    If you want more guidance than that you can always ask the PHP Quality Assurance Team on their mailing list ([php-qa@lists.php.net](mailto:php-qa@lists.php.net)) where they would like you to direct your attentions.

*   **How is a phpt test is used?**

    When a test is called by the `run-tests.php` script it takes various parts of the phpt file to name and create a `.php` file. That `.php` file is then executed. The output of the `.php` file is then compared to a different section of the phpt file. If the output of the script _matches_ the output provided in the phpt script—it passes.

*   **What should a phpt test do?**

    Basically—it should try and break the PHP function. It should check not only the functions normal parameters, but it should also check edge cases. Intentionally generating an error is allowed and encouraged.

## Writing phpt Tests

### Naming Conventions

Phpt tests follow a very strict naming convention. This is done to easily identify what each phpt test is for. Tests should be named according to the following list:

Tests for bugs
: `bug<bugid>.phpt (bug17123.phpt)`

Tests for a function's basic behaviour
: `<functionname>_basic.phpt (dba_open_basic.phpt)`

Tests for a function's error behaviour
: `<functionname>_error.phpt (dba_open_error.phpt)`

Tests for variations in a function's behaviour
: `<functionname>_variation.phpt (dba_open_variation.phpt)`

General tests for extensions
: `<extname><no>.phpt (dba_003.phpt)`

The convention of using `_basic`, `_error`, and `_variation` was introduced when we found that writing a single test case for each function resulted in unacceptably large test cases. It's quite hard to debug problems when the test case generates 100s of lines of output.

The "basic" test case for a function should just address the single most simple thing that the function is designed to do. For example, if writing a test for the `sin()` function a basic test would just be to check that `sin()` returns the correct values for some known angles—eg `30`, `90`, `180`.

The "error" tests for a function are test cases which are designed to provoke errors, warnings, or notices. There can be more than one error case, if so the convention is to name the test cases `mytest_error1.phpt`, `mytest_error2.phpt`, and so on.

The "variation" tests are any tests that don't fit into "basic" or "error" tests. For example one might use a variation tests to test boundary conditions.

### How big is a test case?

Small. Really—the smaller the better, a good guide is no more than 10 lines of output. The reason for this is that if we break something in PHP and it breaks your test case we need to be able to find out quite quickly what we broke, going through 1000s of line of test case output is not easy. Having said that it's sometimes just not practical to stay within the 10 line guideline, in this case you can help a lot by commenting the output. You may find plenty of much longer tests in PHP—the small tests message is something that we learnt over time, in fact we are slowly going through and splitting tests up when we need to.

### Comments

Comments help. Not an essay—just a couple of lines on what the objective of the test is. It may seem completely obvious to you as you write it, but it might not be to someone looking at it later on

### Basic Format

A test must contain the sections `TEST`, `FILE`, and either `EXPECT` or `EXPECTF` at a minimum. The example below illustrates a minimal test.

ext/standard/tests/strings/strtr.phpt
{:.figcaption}

``` php
--TEST--
strtr() function - basic test for strtr()
--FILE--
<?php
/* Do not change this test it is a README.TESTING example. */
$trans = array("hello"=>"hi", "hi"=>"hello", "a"=>"A", "world"=>"planet");
var_dump(strtr("# hi all, I said hello world! #", $trans));
?>
--EXPECT--
string(32) "# hello All, I sAid hi planet! #"
```

As you can see, the file is divided into several sections. The `TEST` section holds a one line title of the phpt test. This should be a simple description and shouldn't ever exceed one line. If you need to write more explanation, add comments in the body of the test case. The phpt file's name is used when generating a `.php` file. The `FILE` section is used as the body of the `.php` file, so don't forget to open and close your PHP tags. The `EXPECT` section is the part used as a comparison to see if the test passes. It is a good idea to generate output with `var_dump()` calls.

### PHPT structure details

A phpt test can have many more parts than just the minimum. In fact some of the mandatory parts have alternatives that may be used if the situation warrants it. The phpt sections are documented [here](https://qa.php.net/phpt_details.php).

There is also a very useful set of slides, written by Marcus Boerger [here](http://somabo.de/talks/). Look at the talk entitled "The need for speed, ERM testing".

### Autogenerating test cases

It isn't possible (or even sensible) to try and generate complete test cases for PHP. However there is a script in PHP 5.3 which will help to generate the framework. It can save you some typing and ensure that you get a good basic format. See [test case generation](https://qa.php.net/autogenerate.php) for instructions on how to use it.

### Analyzing failing tests

While writing tests, you will probably run into tests not passing while you think they should. The `make test` command provides you with debug information. Several files will be added per test in the same directory as the `.phpt` file itself. Considering your test file is named `foo.phpt`, these files provide you with information that can help you find out what went wrong:

foo.diff
: A diff file between the expected output (be it in `EXPECT`, `EXPECTF`, or another option) and the actual output.

foo.exp
: The expected output.

foo.log
: A log containing expected output, actual output, and results. Most likely very similar to info in the other files.

foo.out
: The actual output of your `.phpt` test part.

foo.php
: The php code that was executed for this test.

foo.sh
: An executable file that executes the test for you as it was executed during failure.

### Testing your test cases

Most people who write tests for PHP don't have access to a huge number of operating systems but the tests are run on every system that runs PHP. It's good to test your test on as many platforms as you can—Linux and Windows are the most important, it's increasingly important to make sure that tests run on 64 bit as well as 32 bit platforms. If you only have access to one operating system—don't worry, if you have karma, commit the test but watch <php-qa@lists.php.net> for reports of failures on other platforms. If you don't have karma to commit have a look at the next section.

When you are testing your test case it's **really** important to make sure that you clean up any temporary resources (eg files) that you used in the test. There is a special `--CLEAN--` section to help you do this—see [here](https://qa.php.net/write-test.php#clean).

Another good check is to look at what lines of code in the PHP source your test case covers. This is easy to do, there are some instructions on the [PHP Wiki](http://wiki.php.net/doc/articles/writing-tests).

### What should I do with my test case when I've written and tested it?

The next step is to get someone to review it. If it's short you can paste it into a note and send it to <php-qa@lists.php.net>. If the test is a bit too long for that then put it somewhere were people can download it ([pastebin](http://www.pastebin.ca/) is sometimes used). Appending tests to notes as files doesn't work well—so please don't do that. Your note to <php-qa@lists.php.net> should say what level of PHP you have tested it on and what platform(s) you've run it on. Someone from the PHP QA group will review your test and reply to you. They may ask for some changes or suggest better ways to do things, or they may commit it to PHP.

> For PHP TestFest, you should clone the [phpcommunity/phptestfest-php-src](https://github.com/phpcommunity/phptestfest-php-src) repository. Then submit a pull request with your tests. **Don't forget to include the name of your User Group or Event!**

### Writing Portable PHP Tests

Writing portable tests can be hard if you don't have access to all the many platforms that PHP can run on. Do your best. If in doubt, don't disable a test. It is better that the test runs in as many environments as possible.

If you know a new test won't run in a specific environment, try to write the complementary test for that environment.

Make sure sets of data are consistently ordered. SQL queries are not guaranteed to return results in the same order unless an ORDER BY clause is used. Directory listings are another example that can vary: use an appropriate PHP function to sort them befor printing. Both of these examples have affected PHP tests in the past.

Make sure that any test touching parsing or display of dates uses a hard-defined timezone—preferably UTC. It is important that this is defined in the file section using:

```
date_default_timezone_set('UTC');
```

and not in the INI section. This is because of the order in which settings are checked which is:

```
date_default_timezone_set() -> TZ environmental -> INI setting -> System Setting
```

If a TZ environmental variable is found, the INI setting will be ignored.

Tests that run on—or only have have matching `EXPECT` output for—32-bit platforms can use a `SKIPIF` section like:

``` php
--SKIPIF--
<?php
if (PHP_INT_SIZE != 4) die("skip this test is for 32bit platforms only");
?>
```

Tests for 64-bit platforms can use:

``` php
--SKIPIF--
<?php
if (PHP_INT_SIZE != 8) die("skip this test is for 64bit platforms only");
?>
```

To run a test only on Windows:

``` php
--SKIPIF--
<?php
if (substr(PHP_OS, 0, 3) != 'WIN') die("skip this test is for Windows platforms only");
?>
```

To run a test only on Linux:

``` php
--SKIPIF--
<?php
if (!stristr(PHP_OS, "Linux")) die("skip this test is Linux platforms only");
?>
```

To skip a test on Mac OS X Darwin:

``` php
--SKIPIF--
<?php
if (!stristr(PHP_OS, "Darwin")) die("skip this test is for Mac OS X platforms only");
?>
```

## Examples

### EXPECTF

`ext/standard/tests/strings/str_shuffle.phpt` is a good example for using `EXPECTF` instead of `EXPECT`. From time to time the algorithm used for shuffle changed and sometimes the machine used to execute the code has influence on the result of shuffle. But it always returns a three character string detectable by `%s` (that matches any string until the end of the line). Other scan-able forms are `%a` for any amount of chars (at least one), `%i` for integers, `%d` for numbers only, `%f` for floating point values, `%c` for single characters, `%x` for hexadecimal values, `%w` for any number of whitespace characters, and `%e` for `DIRECTORY_SEPARATOR` (`\` or `/`).

See also [EXPECTF details](https://qa.php.net/expectf_details.php)

ext/standard/tests/strings/str_shuffle.phpt
{:.figcaption}

``` php
--TEST--
Testing str_shuffle.
--FILE--
<?php
/* Do not change this test it is a README.TESTING example. */
$s = '123';
var_dump(str_shuffle($s));
var_dump($s);
?>
--EXPECTF--
string(3) "%s"
string(3) "123"
```

### EXPECTREGEX

`ext/standard/tests/strings/strings001.phpt` is a good example for using `EXPECTREGEX` instead of `EXPECT`. This test also shows that in `EXPECTREGEX` some characters need to be escaped since otherwise they would be interpreted as a regular expression.

ext/standard/tests/strings/strings001.phpt
{:.figcaption}

``` php
--TEST--
Test whether strstr() and strrchr() are binary safe.
--FILE--
<?php
/* Do not change this test it is a README.TESTING example. */
$s = "alabala nica".chr(0)."turska panica";
var_dump(strstr($s, "nic"));
var_dump(strrchr($s," nic"));
?>
--EXPECTREGEX--
string\(18\) \"nica\x00turska panica\"
string\(19\) \" nica\x00turska panica\"
```

### SKIPIF

Some tests depend on modules or functions available only in certain versions or they even require minimum version of php or zend. These tests should be skipped when the requirement cannot be fulfilled. To achieve this you can use the `SKIPIF` section. To tell `run-tests.php` that your test should be skipped the `SKIPIF` section must print out the word "skip" followed by a reason why the test should skip.

ext/exif/tests/exif005.phpt
{:.figcaption}

``` php
--TEST--
Check for exif_read_data, unusual IFD start
--SKIPIF--
<?php
if (!extension_loaded('exif')) print 'skip exif extension not available';
?>
--FILE--
<?php
/* Do not change this test it is a README.TESTING example.
 * test5.jpg is a 1*1 image that contains an Exif section with ifd = 00000009h
 */
$image  = exif_read_data('./ext/exif/tests/test5.jpg','',true,false);
var_dump($image['IFD0']);
?>
--EXPECT--
array(2) {
  ["ImageDescription"]=>
  string(11) "Ifd00000009"
  ["DateTime"]=>
  string(19) "2002:10:18 20:06:00"
}
```

Test script and `SKIPIF` code should be directly written into `*.phpt`. However, it is recommended to use include files when more test scripts depend on the same `SKIPIF` code or when certain test files need the same values for some input.

**Note:** no file used by any test should have one of the following extensions: `.php`, `.log`, `.mem`, `.exp`, `.out`, or `.diff`. When you use an include file for the `SKIPIF` section it should be named `skipif.inc`, and an include file used in the `FILE` section of many tests should be named `test.inc`.

## Final Notes

### Cleaning up after running a test

Sometimes test cases create files or directories as part of the test case, and it's important to remove these after the test ends. The `--CLEAN--` section is provided to help with this.

The PHP code in the `--CLEAN--` section is executed separately from the code in the `--FILE--` section. For example, this code:

``` php
--TEST--
Will fail to clean up
--FILE--
<?php
$temp_filename = "fred.tmp";
$fp = fopen($temp_filename, "w");
fwrite($fp, "Hello Boys!");
fclose($fp);
?>
--CLEAN--
<?php
unlink($temp_filename);
?>
--EXPECT--
```

will not remove the temporary file because the variable $filename is not defined in the `--CLEAN--` section.

Here is a better way to write the code:

``` php
--TEST--
This will remove temporary files
--FILE--
<?php
$temp_filename = __DIR__."/fred.tmp";
$fp = fopen($temp_filename, "w");
fwrite ($fp, "Hello Boys!\n");
fclose($fp);
?>
--CLEAN--
<?php
$temp_filename = __DIR__."/fred.tmp";
unlink($temp_filename);
?>
--EXPECT--
```

Note the use of the `__DIR__` construct which will ensure that the temporary file is created in the same directory as the phpt test script.

When creating temporary files it is a good idea to use an extension that indicates the use of the file, eg `.tmp`. It's also a good idea to avoid using extensions that are already used for other purposes, eg `.inc`, `.php`. Similarly, it is helpful to give the temporary file a name that is clearly related to the test case. For example, `mytest.phpt` should create `mytest.tmp` (or `mytestN.tmp`, N=1,2,3,…) then if by any chance the temporary file isnt't removed properly it will be obvious which test case created it.

When writing and debugging a test case with a `--CLEAN--` section it is helpful to remember that the php code in the `--CLEAN--` section is executed separately from the code in the `--FILE--` section. For example, in a test case called `mytest.phpt`, code from the `--FILE--` section is run from a file called `mytest.php`, and code from the `--CLEAN--` section is run from a file called `mytest.clean.php`. If the test passes, both the `.php` and `.clean.php` files are removed by `run-tests.php`. You can prevent the removal by using the `--keep` option of `run-tests.php`, this is a very useful option if you need to check that the `--CLEAN--` section code is working as you intended.

### Redirecting tests

Using `--REDIRECTTEST--` it is possible to redirect from one test to a bunch of other tests. That way multiple extensions can refer to the same set of test scripts probably using it with a different configuration.

The block is eval'd and supposed to return an array describing how to redirect. The resulting array must contain the key 'TEST' that stores the redirect target as a string. This string usually is the directory where the test scripts are located and should be relative. Optionally you can use the 'ENV' as an array configuring the environment to be set when executing the tests. This way you can pass configuration to the executed tests.

Redirect tests may especially contain `--SKIPIF--`, `--ENV--`, and `--ARGS--` sections, but they no not use any `--EXPECT--` section.

The redirected tests themselves are just normal tests.

### Error reporting in tests

All tests should run correctly with `error_reporting(E_ALL)` and `display_errors=1`. This is the default when called from `run-tests.php`. If you have a good reason for lowering the error reporting, use `--INI--` section and comment this in your testcode.

If your test intentionally generates a PHP warning message use `$php_errormsg` variable, which you can then output. This will result in a consistent error message output across all platforms and PHP configurations, preventing your test from failing due inconsistencies in the error message content. Alternatively you can use `--EXPECTF--` and check for the message by replacing the path of the source of the message with `%s` and the line number with `%d`. The end of a message in a test file `example.phpt` then looks like `in %sexample.php on line %d`. We explicitly dropped the last path divider as that is a system dependent character `/` or `\`.

### Last bit

Often you want to run test scripts without `run-tests.php` by simply executing them on command line like any other php script. But sometimes it disturbs having a long `--EXPECT--` block, so that you don't see the actual output as it scrolls away overwritten by the blocks following the actual file block. The workaround is to use terminate the `--FILE--` section with the two lines `===DONE===` and `<?php exit(0); ?>`. When doing so, `run-tests.php` does not execute the line containing the exit call as that would suppress leak messages. Actually, `run-tests.php` ignores any part after a line consisting only of `===DONE===`.

Here is an example:

``` php
--TEST--
Test hypot() - dealing with mixed number/character input
--INI--
precision=14
--FILE--
<?php
$a="23abc";
$b=-33;
echo "$a :$b ";
$res = hypot($a, $b);
var_dump($res);
?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
23abc :-33 float(40.224370722238)
===DONE===
```

If executed as PHP script the output will stop after the code on the `--FILE--` section has been run.
