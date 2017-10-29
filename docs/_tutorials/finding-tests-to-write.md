---
layout: page
title: Finding Tests to Write
date: 2017-09-24 11:16:00 -05:00
author:
    name: Oscar Merida
    website: http://oscarm.org
summary: >
    How to find functions and methods which need tests.
image:
    url: /images/photos/clem-onojeghuo-217352.jpg
    alt: Searching through album stacks
    title: Retro Vibes by Clem Onojeghuo
    credit: Photo by [Clem Onojeghuo](https://unsplash.com/photos/QBvtgLdmTbQ).
---

Once you're comforable writing a basic test, you'll want to find functions or lines of code which need tests. Don't forget to [review how to name your PHPT files]({{ "/tutorials/creating-new-test-files/#naming-conventions" | absolute_url }}).

## GCOV

The [PHP gcov site](http://gcov.php.net) shows which functions have tests in a number of ways and is broken down by version. You should write tests for the current stable branch of PHP, which is [7.1](http://gcov.php.net/viewer.php?version=PHP_7_1) at the time of this writing.

You can find tests to write by:

* Checking the [coverage report](http://gcov.php.net/PHP_7_1/lcov_html/) for directories---which map to core or extensions---with low percentages, indicated by red or yellow cells. Reading the coverage report means understanding some C code to see how the function works. Searching for `PHP_FUNCTION` or `PHP_METHOD` blocks that have lines in red will lead you to parts of the codebase in need of tests.
* Browsing the [tested functions](http://gcov.php.net/viewer.php?version=PHP_7_1&func=tested_functions), which flag functions without tests in red. Then, review the documentation for the function on [php.net](https://php.net) to understand how it's supposed to work and how to write a test for it.
* You can also look at [test failures](http://gcov.php.net/viewer.php?version=PHP_7_1&func=tests) to try to fix an existing test, instead of writing a new one.

## Extensions

You shouldn't spend time writing tests for extensions which are deprecated or have been removed, like [ereg](https://php.net/ereg) or [mysql](https://php.net/manual/en/intro.mysql.php). If you're using a pre-built testing environment like [docker-phpqa]({{ "/tutorials/phpqa-tutorial/" | absolute_url }}), some extensions which need tests are disabled. In this case, you'll need to setup a testing environment where you can enable extensions.

