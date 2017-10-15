---
layout: page
title: Seja um mentor
permalink: pt/mentors/index.html
wooble:
    message: "Mentore um grupo!"
    class: right
summary: >
    Em um futuro próximo, esta página irá explicar o que significa ser um mentor do PHP TestFest. Veja em breve!
---

Em um futuro próximo, esta página irá explicar o que significa ser um mentor do PHP TestFest. Veja em breve!

---
{:.major}

Clique nos anos para ver como mentores ajudaram no PHP TestFest naquele ano.

{% for year in site.mentors %}
* [{{ year.title }}]({{ year.url }})
{% endfor %}
