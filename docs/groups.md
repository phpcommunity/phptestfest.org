---
layout: page
title: Participating Groups
permalink: groups/index.html
---

Click on a year to see what groups participated in the PHP TestFest that year.

{% for year in site.groups %}
* [{{ year.title }}]({{ year.url }})
{% endfor %}