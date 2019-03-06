---
title: 'ProximaX Storage & Streaming Test Networks Launched'
media_order: stock-photo-helsinki-finland-july-the-traditional-launch-of-the-hot-air-balloon-in-a-city-park-next-to-129321458.jpg
published: true
date: '01/28/2019 05:54 am'
publish_date: '01/28/2019 05:54 am'
taxonomy:
    category:
        - Announcements
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
---

We are excited to announce that our storage and streaming test networks have been launched. 

They can be accessed via the following links (peer list only):
* Storage node list: http://54.169.133.250:8080/network/peers 
* Streaming node list: http://13.250.33.245:6996/discovery/list

Their deployment is a leap towards achieving our milestones for the up-and-coming main network. Like the blockchain test network, they will be used to stage all updates from here on out.

We will eventually start opening our doors to the community so that the progress that has been made can be seen, tried, and tested all the way up until we are ready to roll out the main network. 
 
## Storage Layer

Our vision for the storage layer has been the same since the beginning: to provide a technology agnostic decentralised storage solution. One of the critical technologies we are using for this purpose is the Interplanetary File System ("IPFS").  With IPFS as a core service, we have built the required supporting components around it.

Supporting components include the **verifier** module that is called by the verifier actor (which is also a storage node) to challenge nodes, by verifying if they are still providing the expected storage service. The **acceptor** module is an outer layer component that clients interface with. It has a REST API for interaction via a Software Development Kit (“SDK”). The **contract** module communicates with the blockchain to form pre-defined digital contracts that will support the incentivisation and data persistence on the blockchain ledger.

In addition to these, the **reputation** system has been included in this release. This is the grading system for all storage nodes which checks their ability to do the service intended, and then incorporates this into the Proof of Conflation Aggregate (PoCA) Market/Selection process.

Features deployed for the storage test network:

* Core storage module with IPFS
* Core verifier, protocol and APIs
* Modules
    * Acceptor module
    * Onboarding module
    * Contract module
* Reputation System (integration with blockchain)
* Implemented Proof of Data Possession consensus with three algorithms: APDP, CPOR, and MHT-SC
* Implemented the RPC on top of libp2p for protocol communication
* Command line interface and System Daemon
* SDK version 1


## Streaming Layer

Along with our Storage Layer, we are also proud to announce the launch of our Streaming Layer test network, built and delivered by PeerStream Inc. (“PSP”).

Decentralised streaming has some of the most compelling use-cases which we are all looking forward to seeing become realised.   PSP has been hard at work with building the components needed to support this layer.

Features deployed for the streaming test network:

* Anonymous, decentralised presence system for DAPPs, which allows app developers to build secure and anonymous communication networks
* Private, anonymous 1:1, and end-to-end encrypted text and data messaging system utilising onion routing and modern encryption protocols
* Cross-platform client application SDK enabling Windows, OS X, Linux, iOS, and Android development
* Blockchain-enabled client and node authorisation

## Applications to Migrate to Testnet
Most of our applications are sitting alongside the private instance of our blockchain and storage but since we now have the public test network, our team will start planning on migrating them. 

## Moving Forward

Launching these test networks is a great leap forward towards our goal of building an innovative platform for decentralised technologies. We will continue to communicate enhancements made as we progress towards realising our final vision.