---
layout: archive
title: "Teaching"
permalink: /teaching/
author_profile: true
---

{% include base_path %}

These are the courses where I have taught as Teaching Assistant:

{% for post in site.teaching reversed %}
  {% include teaching-single.html %}
{% endfor %}
