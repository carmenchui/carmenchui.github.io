---
layout: archive
title: "Publications"
permalink: /publications/
author_profile: true
---

You can also find my publications on <u><a href="{{site.author.googlescholar}}">Google Scholar</a></u> and <u><a href="{{site.author.dblp}}">DBLP</a></u>.

{% include publications-bibase.html %}

{% include base_path %}

{% for post in site.publications reversed %}
  {% include archive-single.html %}
{% endfor %}