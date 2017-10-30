---
layout: page
title: Grupos participantes
permalink: pt-br/groups/index.html
lang: pt-br
---

Clique em um dos anos para ver quais grupos participaram do PHP TestFest naquele ano específico.

{% for year in site.groups %}
* [{{ year.title }}]({{ year.url }})
{% endfor %}