---
layout: page
title: Participando de Grupos
permalink: pt-br/groups/index.html
---

Clique em um ano para ver quais grupos participaram do PHP TestFest naquele ano.

{% for year in site.groups %}
* [{{ year.title }}]({{ year.url }})
{% endfor %}