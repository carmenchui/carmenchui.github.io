---
layout: archive
title: "Teaching & Mentoring"
permalink: /teaching/
author_profile: true
---

{% include base_path %}

In addition to invigilating faculty-wide exams, I designed and conducted tutorials, held office hours, graded progress and final reports, and designed and graded programming and theoretical assignments, tests, and exams for the following courses as a **Teaching Assistant (TA)**:

{% for post in site.teaching reversed %}
  {% include teaching-single.html %}
{% endfor %}
