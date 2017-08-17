PHP TestFest Contributed Presentations
======================================

Welcome to the community-contributed PHP TestFest presentations. If you have
content you'd like to contribute, please feel free to submit a pull request.

*NOTE: The content must be yours to contribute, and you acknowledge that any
contributions are under the terms and conditions of the* `Apache License,
Version 2.0`_.

All presentations in the ``slides/`` folder use reStructuredText_ as their
mark-up language. reStructuredText is similar to Markdown but has a variety of
other features that make it a bit more expressive. The Sphinx project has a
great `primer on how to write reStructuredText`_. It's easy to use.

We use `Hovercraft!`_ to convert this mark-up into presentatable HTML. Under the
hood, Hovercraft! uses `impress.js`_ to create beautful presentations.
Hovercraft! gives us the ability to easily accept contributions and track
changes in a version control system. It's just plain text, and we like that.

The easiest way to run and preview these presentations using Hovercraft! is
to use Docker_. From the ``slides/`` directory, run the following (replacing
``presentation-folder`` with the name of the slides folder you wish to
preview):

.. code:: shell

    docker run -it --rm -p "9000:9000" -v $PWD:/presentation phpcommunity/hovercraft presentation-folder/presentation.rst

Now, open http://localhost:9000 in your web browser and click through the
slides! In the web browser, type "h" for the help console.

That's all there is to it. Have fun!


.. _Apache License, Version 2.0: https://github.com/phpcommunity/phptestfest.org/blob/master/LICENSE
.. _reStructuredText: http://docutils.sourceforge.net/rst.html
.. _primer on how to write reStructuredText: http://www.sphinx-doc.org/en/stable/rest.html
.. _Hovercraft!: https://hovercraft.readthedocs.io/en/latest/presentations.html
.. _impress.js: https://github.com/impress/impress.js
.. _Docker: https://www.docker.com/
