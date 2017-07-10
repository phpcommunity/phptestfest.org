# PHP TestFest

[![Software License][badge-license]][license]
[![Build Status][badge-build]][build]
[![Coverage Status][badge-coverage]][coverage]

Are you looking for information on PHP TestFest? Take a look at our website,
where you can find details on organizing a PHP TestFest event, finding a group`
to participate with, being a mentor, and more: <https://phptestfest.org>.

If you're looking to contribute to PHP TestFest, you've come to the right place.
Keep reading…


## Tools

### PHP TestFest Console Application

One of the tools we're building is a console application that will make it
easier to get up and running quickly with PHP TestFest and writing phpt
tests. Give it a try. From a command prompt, type:

``` bash
composer create-project --stability dev phpc/testfest
cd testfest/
./bin/testfest
```

## Website

The [PHP TestFest website](https://phptestfest.org) is maintained in the `docs/`
directory in this repository. It is served using
[GitHub Pages](https://pages.github.com/). When pull requests are merged to
master, any changes to `docs/` are immediately deployed.

All content may be written in GitHub-flavored Markdown and HTML. For some
examples of how you may use the site theme, take a look at
[Generic](https://phptestfest.org/theme-example/generic.html)
(`docs/theme-example/generic.md`) and
[Elements](https://phptestfest.org/theme-example/elements.html)
(`docs/theme-example/elements.md`).

There are a few main sections of the website where contributions are greatly
needed:

* [Tutorials](https://phptestfest.org/tutorials/)

  Take a look at other tutorials in `docs/_tutorials/` to get a feel for the
  format of tutorial files. Everything is in Markdown, but there's some YAML
  front-matter you'll need to add. Just create a new Markdown file in
  `docs/_tutorials/`, and you're on your way!

  Be sure you have permission to use any images included with your post. It's
  best if the images provided use a Creative Commons license or are in the
  Public Domain. A good place to look for free-to-use images is
  [Unsplash](https://unsplash.com/).

* [Resources](https://phptestfest.org/resources/)

  To add more items to the list of resources, edit `docs/_data/resources.yml`.
  It's a YAML array with specific properties. Take a look at some of the other
  items listed there to see what properties you might need to specify.

* [Participating Groups](https://phptestfest.org/groups/2017/)

  If your group is participating in PHP TestFest, add it to the list. Edit
  `docs/_data/groups/2017.yml` to add your group to the list for 2017. It's a
  YAML array; take a look at the properties used by some of the other groups
  listed to see what you can specify.

* [Mentors](https://phptestfest.org/mentors/2017/)

  If you're interested in being a mentor to a group during PHP TestFest, feel
  free to add yourself to the list for 2017. Edit
  `docs/_data/mentors/2017.yml`, specifying any of the properties you feel are
  important for others to know about you. You may also note whether you're
  available to mentor locally, remotely, or able to travel for a group.

* Other content

  We can also use some help filling out and maintaining the content of the
  following pages:

  * [Getting Started](https://phptestfest.org/start/) (`docs/start.md`)
  * [Organize a PHP TestFest Event](https://phptestfest.org/lead/)
    (`docs/lead.md`)
  * [Be a Mentor](https://phptestfest.org/mentors/) (`docs/mentors.md`)

### Testing Changes Locally

#### Configure Your Environment

To test changes to the `docs/` directory locally, follow these steps to make
sure you have the GitHub Pages dependencies installed:

* (optional but recommended) [Install rbenv](https://github.com/rbenv/rbenv#installation)
  * After installing, type `rbenv install 2.3.3` at a command prompt to install
    Ruby version 2.3.3 with rbenv

* From a command prompt, type the following commands:

``` bash
git clone https://github.com/phpcommunity/phptestfest.org.git
cd phptestfest.org/docs/
gem install bundler
bundle install
```

#### Previewing Changes

To preview your changes, type the following into a command prompt from the
`docs/` directory:

``` bash
bundle exec jekyll serve
```

Now, you may preview the site in your web browser at `http://localhost:4000`.


## License

PHP TestFest website and tools are copyright ©
[PHP Community Foundation](https://phpcommunity.org) and are licensed under the
Apache License, Version 2.0. See [LICENSE][license] for more details.


[badge-license]: https://img.shields.io/github/license/phpcommunity/phptestfest.org.svg?style=flat-square
[badge-build]: https://img.shields.io/travis/phpcommunity/phptestfest.org/master.svg?style=flat-square
[badge-coverage]: https://img.shields.io/coveralls/phpcommunity/phptestfest.org/master.svg?style=flat-square
[license]: https://github.com/phpcommunity/phptestfest.org/blob/master/LICENSE
[build]: https://travis-ci.org/phpcommunity/phptestfest.org
[coverage]: https://coveralls.io/r/phpcommunity/phptestfest.org?branch=master
