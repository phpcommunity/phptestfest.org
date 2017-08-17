:title: Introduction to PHP TestFest
:author: Ben Ramsey

Feel free to make contributions and submit corrections to this presentation! It
uses reStructuredText_ as its mark-up language. reStructuredText is similar to
Markdown but has a variety of other features that make it a bit more expressive.
The Sphinx project has a great `primer on how to write reStructuredText`_. It's
easy to use.

We use `Hovercraft!`_ to convert this mark-up into presentatable HTML. Under the
hood, Hovercraft! uses `impress.js`_ to create beautful presenations.
Hovercraft! gives us the ability to easily accept contributions and track
changes in a version control system. It's just plain text, and we like that.

The easiest way to run and preview this presentation using Hovercraft! is
to use Docker_. From the ``slides/`` directory, run the following:

.. code:: shell

    docker run -it --rm -p "9000:9000" -v $PWD:/presentation phpcommunity/hovercraft php-testfest-intro/presentation.rst

Now, open http://localhost:9000 in your web browser, and you click through the
slides! In the web browser, type "h" for the help console.

That's all there is to it. The rest of this document is the presentation.

----

This is the first slide
=======================

Here is some text


.. _reStructuredText: http://docutils.sourceforge.net/rst.html
.. _primer on how to write reStructuredText: http://www.sphinx-doc.org/en/stable/rest.html
.. _Hovercraft!: https://hovercraft.readthedocs.io/en/latest/presentations.html
.. _impress.js: https://github.com/impress/impress.js
.. _Docker: https://www.docker.com/
