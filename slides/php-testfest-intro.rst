:title: Introduction to PHP TestFest
:author: Ben Ramsey
:js-header: theme/presentation.js
:css: theme/fonts.css
:css: theme/presentation.css
:css: assets/php-testfest-intro/php-testfest-intro.css
:skip-help: false

Welcome! This is the "Introduction to PHP TestFest" presentation.

To find out how to view and edit this presentation, take a look at the
README_.

The rest of this document is the presentation.


----


:id: start
:class: title

PHP TestFest
============

Growing the PHP core one test at a time
---------------------------------------


----


.. We use r5000 to support a wide range of projector resolutions.

:data-x: r5000
:id: intro

Introducing PHP TestFest
========================

.. class:: two-thirds

Have you ever wanted to contribute to PHP core but have been afraid that your
*C* skills aren’t up for the challenge?

.. class:: two-thirds

*Well, have no fear!* If you know PHP, you can contribute by **writing tests**.

.. class:: two-thirds

We’ll show you how.

.. note::

    Have you ever wanted to contribute to PHP core but have been afraid that
    your C skills aren’t up for the challenge?

    Well, have no fear! If you know PHP, you can contribute by writing tests.

    We’ll show you how.


----


:id: what-is-it
:class: section

What Is PHP TestFest?
=====================

And why should you care?
------------------------


----


What Does A Test Look Like?
===========================

.. include:: assets/php-testfest-intro/example-01.phpt
    :code: php
    :number-lines: 1



.. _README: README.rst


----

:id: set-up-dev-env
:class: section

Getting Started
===============

----

Tools That You Will Need
------------------------

Some basic tools to get you started:

* A github account

* A fork of the TestFest repo in your github account: https://github.com/phpcommunity/phptestfest-php-src

* Docker

* A text editor or a PHP IDE


----


Let's Fork It!
--------------

* Go to https://github.com/phpcommunity/phptestfest-php-src and click the "Fork" button

* Go to your fork of ``phpfest-php-src`` in your github account and click the "Clone or download" button

* Copy the path provided (use HTTPS if you do not already have an SSH key associated with your github account)

* Clone the repo on your dev machine and go to that new directory

  .. code:: bash

     git clone copied-path-of-your-fork-of-phpfest-php-src
     cd !$

----

Let's Fork It! -- cont.
-----------------------

* Verify that your ``user.name`` and ``user.email`` match your github account details.

  .. code:: bash

     git config -l | grep user

----

Let's Fork It! -- cont.
-----------------------

* Set up your upstream branch to point to ``phpcommunity/phptestfest-php-src`` 
  
  * This makes it easier to sync your local and github repos with the official PHP TestFest repo

  .. code:: bash

     git remote add upstream git@github.com:phpcommunity/phptestfest-php-src.git
     # Or, if you do not have a github SSH key
     git remote add upstream https://github.com/phpcommunity/phptestfest-php-src.git

* Before you begin to work off of a branch of ``phpcommunity/phptestfest-php-src``, sync that branch between your three repos

  .. code:: bash

     git checkout phptestfest-2017-master
     git pull upstream phptestfest-2017-master
     git push origin phptestfest-2017-master

----

Install docker-phpqa
--------------------

Follow the instructions on https://phptestfest.org/tutorials/phpqa-tutorial/