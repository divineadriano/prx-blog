---
title: Home
body_classes: 'title-center title-h1h2'
dateformat: 'Y-m-d H:i'
process:
    markdown: true
    twig: false
routable: true
cache_enable: true
visible: true
debugger: true
layout: cards
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
hero_image: PROXIMAX_MEDIUM.png
show_pagination: true
content:
    items: '@root.descendants'
    filter: 
        published: true
        type: 'item'
    limit: 6
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
---