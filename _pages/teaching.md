/*
Title: Teaching & Mentoring
*/

---
layout: archive
title: |
permalink: /teaching/
author_profile: true
---

{% include base_path %}

# Mentoring

As part of the APS 1203/1204 course offered with the Prospective Professors in Training (PPIT) program, I was a mentor for a group of six first-year undergraduate students taking their Engineering Strategies & Practice II (APS 112) course in the Winter 2017 semester. The group's project is to redesign mathematics in the classroom to make the subject more engaging and interesting for high-school students. We have been featured in the UofT Engineering News in the following article: 
[http://news.engineering.utoronto.ca/engineering-educational-experience/](http://news.engineering.utoronto.ca/engineering-educational-experience/){:target="_blank"}

---

# Teaching

In addition to invigilating faculty-wide exams, I designed and conducted tutorials, held office hours, graded progress and final reports, and designed and graded programming and theoretical assignments, tests, and exams for the following courses as a **Teaching Assistant (TA)**:

{% for post in site.teaching reversed %}
  {% include teaching-single.html %}
{% endfor %}
