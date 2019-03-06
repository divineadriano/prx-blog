---
title: 'ProximaX Tech - January 2019'
media_order: 'tech1.jpg,PROXIMAX-TECH_JANUARY-2019_english--1--1 (1).jpg,tech1.jpg'
published: true
date: '02/11/2019 06:02 am'
publish_date: '02/11/2019 06:02 am'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talks'
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
comments:
    enabled: true
image_file: ProximaX-Korean-Tech-Banner_January-2019-copy-1.jpg
---

## Blockchain, Storage and Streaming Test Networks

We recently announced the launch of our public storage and streaming test networks, and at the time of writing this blog, some of our applications are in the process of being migrated over and integrated with the public networks.

For more information on the public storage and streaming test networks, visit our recent blog posts below.

https://blog.proximax.io/storage-streaming-testnet-launch/
https://blog.proximax.io/proximax-sirius-blockchain-test-network/

We will continue to use these environments to stage our changes. Like the public blockchain test network, we will add our changes on a weekly basis (every Friday preferably). Once all is set, we will then encourage the community to get further involved by inviting developers to build applications on top of the platform.

## High-level Technical Papers
We have now also published the first version of our technical whitepaper along with storage specific research papers.

The High-Level Technical Whitepaper is a bird’s-eye view of all the platform’s components. In this first version of the paper, we have explained the platform’s overall design and the workings of its internal processes.

We have two types of platforms, private/permissioned and public. The public platform will include storage, streaming, and super contracts. The private/permissioned has a more controlled set of features which include storage, streaming, database, and super contracts. The details of these are all written in the whitepaper.

Aside from information on the high-level technical design, we have also published the supporting reference and modelling traceability reports for the storage layer. For more information, you can read our blog post below.

https://blog.proximax.io/tech-papers/

Our team will continue to publish more documentation as we progress with the platform’s development. 

## ProximaX Web Wallet Update
Since launching a few months ago, we have made major enhancements to the web wallet and fixed reported issues (https://trello.com/b/nVu5ZxqN/proximaxtestnetapps).

### Transaction Dashboard
* Duplication of confirmed and unconfirmed transactions was corrected.
* Mosaic divisibility was added to the amounts.
* Performance was improved.
* The initial load is when the user logs.
* Once logged, the transactions and mosaic information are cached.
* Once a new transaction is confirmed, it is added and saved in the cache.
* When the user logs out of the wallet, all the information stored in cache is destroyed.

### Node Selection
* There is a default node in a json file.
* The user can add and select new nodes.

### Address Book
* The close button in the modal was added.
* The minimum of 6 characters to 2 characters was modified in the user field.

### Account
* It was validated that the password field is not empty.
* The password field is hidden when the private key is displayed, when the private key is closed, the password field is again displayed.

## Summary
Below is a summary of what we have completed in January:

* Launched the public test networks for storage and streaming.
* Finalised and published the High-Level Technical Whitepaper and R&D documentation.
* Launched ProximaX Suite app.
* ProximaX web wallet fixes.
