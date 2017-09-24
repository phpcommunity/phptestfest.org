---
layout: page
title: Finding Tests to Write
date: 2017-07-09 15:32:43 -05:00
author:
    name: Oscar Merida
    website: https://oscarm.org
summary: >
    How to find functions and methods which need tests.
---

Once you're comforable writing a basic test, you'll want to find functions or lines of code which need tests. Don't forget to review how to name your PHPT files.

## GCOV

The [gcov pages](http://gcov.php.net) shows which functions have tests in a number of ways and broken down by version. You should write tests for the current stable branch of PHP, which is [7.1](http://gcov.php.net/viewer.php?version=PHP_7_1) at the moment.

You can find tests to write by:

* Checking the [coverage report](http://gcov.php.net/PHP_7_1/lcov_html/) for directories---which map to core or extensions---with low percentages, indicated by red or yellow cells. Reading the coverage report means understanding some C code to see how the function works. Searching for `PHP_FUNCTION` or `PHP_METHOD` blocks that have lines in red will lead you to parts of the codebase in need of tests.
* Browsing the [tested functions](http://gcov.php.net/viewer.php?version=PHP_7_1&func=tested_functions) which will flag functions without tests in red. Then review the documentation for the function on php.net to understand how it's supposed to work and how to write a test.
* You can also look at [test failures](http://gcov.php.net/viewer.php?version=PHP_7_1&func=tests) to try to fix an existing one instead of writing a new one.

## Extensions

You shouldn't spend time writing tests for extensions which are deprecated or have been removed, like ereg or mysql. If you're using a a pre-built testing environment like [docker-phpqa](http://localhost:4000/tutorials/phpqa-tutorial/), some extensions which need tests are disabled. In this case, you'll need to setup a testing environment where you can enable extensions.

