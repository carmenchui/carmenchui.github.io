---
permalink: /most/
title: "MOlecular Structure Ontology (MoSt)"
author_profile: true
---

Disclaimer: This page is under construction.  Pardon the mess.

This was work done as part of my Ph.D. thesis at the [University of Toronto](http://www.utoronto.ca) under the supervision of [Prof. Michael Gruninger](http://stl.mie.utoronto.ca/gruninger.html).

Ontology Organization
=====================

![most hierarchy](/images/most_semantic_conditions.jpg)

Major Design Decisions
======================
The ontology allows for:
- multiple fusion to support bridges
- unique spiro
- unique tether

The ontology represents atoms, bonds, functional groups, and skeletons as elements of the domain in the ontology, and imports theories from [molecular_graph](https://github.com/gruninger/colore/blob/master/ontologies/molecular_graph/).


Verification of Theories
================================================
- This ontology has been verified with theories found in the [bipartite_incidence](https://github.com/gruninger/colore/blob/master/ontologies/bipartite_incidence/) and [tripartite_incidence](https://github.com/gruninger/colore/blob/master/ontologies/tripartite_incidence/) hierarchies in [COLORE](https://github.com/gruninger/colore).
- See the [mappings](https://github.com/gruninger/colore/blob/master/ontologies/most/mappings/) folder for translation definitions.
- See the [experiments](https://github.com/gruninger/colore/blob/master/ontologies/most/experiments/) folder for proofs.