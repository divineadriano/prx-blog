---
title: 'ProximaX Tech - November 2018'
published: true
date: '12/12/2018 05:43 am'
publish_date: '12/12/2018 05:43 am'
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
---

Our team has continued its productive and aggressive push this month by launching our blockchain testnet and a few supporting applications. We are also building storage and streaming node components as well as the contracts that are needed as part of the ecosystem. In addition, we now have an idea of how the Super Contract should work as part of our platform solution by way of utilizing executor nodes and the ProximaX Virtual Machine.

## Core Development

### Blockchain Layer
November saw us launch our own blockchain testnet environment. Launching this environment allows us to stage our changes while opening it up to the community for potential engagement. The testnet environment will be consistently patched with our changes every Friday. 

Over the course of 2 weeks since the launch, we made the following changes on the catapult server and REST API:

**November 23, 2018**

![Screen-Shot-2018-12-06-at-8.19.07-PM](image://Screen-Shot-2018-12-06-at-8.19.07-PM.png)

#### Explorer, Wallet, and Faucet 
Shortly after our testnet launch, we released an early version of explorer, wallet, and faucet. These applications will be regularly improved by a dedicated team until they are finally available for beta. As we progress with these releases towards the main network launch, we would like to encourage the community to come forward and participate in testing them. 

Here are the links to the apps:
* http://bctestnetexplorer.xpxsirius.io
* http://bctestnetwallet.xpxsirius.io
* http://bctestnetfaucet.xpxsirius.io

The community can give feedback via our public Trello board. An announcement with the release notes will be made for every update.

### Storage Layer
The storage layer node has now been merged into one package known as "Go-XPX". This will include the integration of onboarding, acceptor, selection, contract creation (integrated with the blockchain) and libp2p modules. 

![47227875_10156575953103964_8867915694419738624_o](image://47227875_10156575953103964_8867915694419738624_o.jpg)

We hope to release the storage testnet which will be integrated with the blockchain testnet by mid-January 2019. The storage layer will have all core functions except the consensus mechanism. This means that the node selection will be based on random generation as we work to finish the reputation system and PoCA Market/Selection process. 

![storage_lf](image://storage_lf.jpg)

In addition to these, we are introducing new contracts specifically for the storage layer. These contracts will be built using ProximaX Sirius plugins to create a digital contractual obligation between the storage host nodes, selected verifier, and the client.

### Streaming Layer
We hope to launch the streaming layer testnet by early next year with discovery and onion routes integrated into the SDKs.

#### About the Streaming Actors/Nodes
All nodes are organized into a loosely connected mesh network where some of the nodes are connected with their immediate neighbours (virtual neighbourhood not related to the physical location of the node). Other nodes can be reached through minimal amount of hops throughout all nodes. Every node maintains its own private key and shares its public key as a public record on a blockchain user registry. Nodes should carry at least one (or multiple) publicly accessible endpoint addresses to allow other nodes and clients to access the node directly when needed.

#### Streaming Concepts - Discovery Service
From a security perspective, the node discovery process should be independent of any particular node (to eliminate the possibility of nodes providing a list of known/compromised nodes). This can be implemented by either adding a number of pre-defined (pre-built into the client) nodes managed by trusted partners or by implementing a voting scheme defining a list of nodes (using proof of stake or proof of importance) providing discovery for the next fixed period. Currently elected discovery nodes should be published on a blockchain level and be available for clients to pull the full list out at any time. A client should only use trusted nodes for discovery purposes (when available) and switch to any other known nodes when none of the public discovery nodes are available. Generally, all nodes should be discoverable and the discovery mechanism should not limit any client (or any other node) from receiving the full list of nodes. We have yet to define the discovery node election process.

#### Streaming - Client registration and presence in the network

In order for a client to establish its presence in the system without revealing her identity, we obfuscate the user presence node from her real entry point. A client registers one or multiple points of contact for herself (we call these points "presence nodes"). To do that, a client discovers three independent nodes on the network, selects which node becomes her entrance node, which node becomes her presence node, and uses the onion-style telescopic connection.


![Screen-Shot-2018-12-09-at-9.16.55-PM](image://Screen-Shot-2018-12-09-at-9.16.55-PM.png)

In the example above, Alice chooses node A as an entrance node and node C as her presence node. Initially, Alice connects to node A anonymously, signing the request with node A’s public key. This link is then used to establish the Diffe-Hellman key exchange creating a session key K between Alice and A. After a secure connection is established, Alice requests node A to extend the connection on her behalf reaching node B (similarly starting from the registration message signed by the node B public key) and further reaching node C where Alice reveals her identity signing the registration message with her own private key (allowing node C to verify it using the public key from the blockchain registry). Node C then announces itself as the presence representative for Alice across the entire network of nodes using the DHT storage mechanism while assigning some expiration time. Alice can renew the presence registration sending keep alive events over that channel periodically. Alice should be able to register multiple presence endpoints for herself for fault tolerance purposes and clients discovering her should be able to choose which entries are most recent and be able to contact one or any of those nodes.

![Screen-Shot-2018-12-09-at-9.16.28-PM](image://Screen-Shot-2018-12-09-at-9.16.28-PM.png)

### Super Contracts and Executor nodes
We've started to conceptualise Super Contracts. The main idea is to create an abstract contract on the ProximaX Sirius blockchain and make it extendable to call an "attached" external process. The external process, in this case, is a ProximaX specific virtual machine that will contain the executable code. 

Before any external process is launched, a market selection process (PoCA) is initiated to look for any executor nodes available to run the digital contract (code). When an executor node is selected, it will pull the virtual machine from a storage node (via hash), run the code and send back the status on the chain for contract confirmation.

We will continue to explore this concept and refine it.


## Tech White Papers
We have a number of white papers that we need to complete such as a high-level technical white paper, business white paper, PoCA paper, and token economy paper. However, the team has been quite bogged down with having to roll out the various components of the network. 

We hope to publish some of these papers by January. 


## Website Update
Our marketing team is updating the ProximaX website and we are now in its final stage of completion. A separate announcement will be made through our social media pages for this soon.

## Demonstrations

### 482.solutions IoT
482.solutions has been working with us since August this year. Recently they presented the use of ProximaX in Kiev where an adruino device sends a telemtry data to the ProximaX platform where records are time-stamped and stored in both the blockchain + storage. 
 
![Screen-Shot-2018-12-09-at-9.25.09-PM](image://Screen-Shot-2018-12-09-at-9.25.09-PM.png)

![Screen-Shot-2018-12-09-at-9.25.20-PM](image://Screen-Shot-2018-12-09-at-9.25.20-PM.png)

Link to presentation: https://docs.google.com/presentation/d/14OHfrmbw6Il7-S-6Zkd8BbDmapCaEJKfCkEKDZEEkis/edit#slide=id.g48048a523d_0_11

Watch the video below.

https://www.facebook.com/482.solutions/videos/727007884321072/UzpfSTcxMzY3ODk2MzoxMDE1NjU3MjY0NTgzMzk2NA/

### Omniaz Blockchain + IoT
Omniaz held an event in Singapore where they showcased their Blockchain + IoT device.

Watch the video below:
https://www.youtube.com/watch?v=VxfWqgh9IkQ

## Summary
Below is a summary of what we have done in November:

* Continued to develop the components needed to support the core platform such as PDP, PoRep and storage components implementation
* Made great progress on applications
* Partners and customers have started to build apps using our private offering
* Storage lifecycle
* Blockchain testnet launch
* Blockchain testnet faucet, wallet and explorer launch
* Developing solutions for customers
* Key demonstrations of IoT projects