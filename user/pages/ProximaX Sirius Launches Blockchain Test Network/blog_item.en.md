---
title: 'ProximaX Sirius Launches Blockchain Test Network'
media_order: 'launch.jpg,index.png,index1.png'
published: true
date: '15-11-2018 05:33'
publish_date: '15-11-2018 05:33'
metadata:
    Keywords: 'ProximaX, ProximaX Sirius, blockchain technology, Blockchain powered, Blockchain protocol, Distributed ledger technology, DLT, dlt, Distributed ledger, Decentralized database, Decentralized database technology, Decentralized storage, Decentralized storage technology, Decentralized supply chain, Decentralized streaming, Integrated and distributed ledger technology, IaDLt, Peer-to-peer technology, Peer to peer streaming, Peer to peer, Consensus mechanism, Consensus protocol, Asymmetric encryption, Data encryption, Off-chain storage, Off-chain streaming, Distributed File Management System, DFMS, Super Contract, Immutability, Data encryption, Encrypted by default, Permissioned, Permission based, Tokenomics, Token economics, Crypto trading, Cryptocurrency, Supply chain, CSD, Central Securities Depository, STO, Security Token Offering, Decentralized supply chain, STO, Private blockchain, DAapps, Decentralized applications, Blockchain apps, Streaming Layer, Streaming Node, Storage Layer, Storage Node, Sharded Information, Sharded Data, Use Case, Use Cases, Blockchain Consensus, Consensus Protocol, Enterprise Solution, Enterprise Solutions, System Integration, Transparency, Immutability, Irreversibility, Traceability, Proof of Bandwidth, Proof of Conflation Aggregate, Proof of Storage, Encryption, Data Security, Data Privacy, Cyber Security, Hackers, Hacking, Nodes, Public Chain, Private Chain, Hybrid Chain, Public & Private Chain, Catapult, SDK, SDKs, Software Development Kits, Super Contract, Super Contracts, Smart Contract, Smart Contracts, Peer-to-Peer , Peer-to-Peer Storage, Software-as-a-Service, SaaS, Lon Wong, PSP, PeerStream, PeerStream Protocol, Anonymous streaming, New Economic Model, New Economic Model Foundation, 482.solutions, Ministry of Community Development UAE, Dragonfly  Fintech, Xarcade, Testnet, Test network, Mainnet, Main network, Tokenomics, Token Economics, XPX, Crypto Currency, Crypto Currencies, Crypto Exchange, Crypto Exchanges, Bitcoin, Zero trust, Escrow, Onchain escrow, Trustless swaps, Trustless, Onion routing, SIM Identity attestation, ProximaX KYC, KYC, Know Your Customer, Know Your Counter Party, Onboarding Customer, Customer Onboarding, Identity Management, Identity Management System, Identity Verification, Identity Authentication, Anti-Money Laundering, AML, RegTech, Regulation Tech, Regulation Technology, GDPR, General Data Protection Regulation, EU GDPR, European Union GDPR, European Union General Data Protection Regulation, Knowyourcustomer, Compliance system, Compliance systems, , ProximaX Suite, Office Suite, Office Collaboration, Workforce Collaboration, Collaboration, Real Time Collaboration, Office suite, word processing, Office collaboration, File sharing, Decentralized file sharing, Real Time Editing, Office Productivity, Productivity, Office Applications, Microsoft Office, Word Processor, Word Processing, Microsoft Word Spreadsheet, Spreadsheets, Excel, Microsoft Excel, Presentation, Presentations, Microsoft Powerpoint, Powerpoint, Keynote, Collabora Office, LibreOffice, Collabora Productivity, Collabora Productivity Ltd,'
taxonomy:
    category:
        - Announcements
image:
    summary:
        enabled: '1'
        file: ' launch.jpg'
    text:
        enabled: '1'
        file: ' launch.jpg'
    width: 1200
    height: 800
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

## Blockchain Test Network

We are delighted to announce today that we have deployed 5 nodes for our blockchain testnet. This testnet is based on the NEM Catapult private chain which has been augmented and amended to suit the requirements of the Proximax Sirius platform. We have included in this testnet a Proof of Stake - PoS, which we adapted from the NXT project. We have decided to use PoS instead of Proof of Importance - PoI, because we believe that the PoS will work just as well. Further, PoI has shown to have little impact on the overall score and is closely related to PoS. Eventually the PoS will only be one part of the equation that forms the Proof of Conflation Aggregate - PoCa.

![](index.png)
<p align="center">5 Nodes (2 API/3 Peer)</p>

Leading to our main network launch, the testnet shall be used as a staging environment so that all changes and amendments can be tested by everyone in the community thoroughly. In carrying out this testing, we hope that we can highlight and address all security issues before moving to the main network. 

At the same time, we believe that this will be monitored closely by the NEM core development team. In so doing, we hope that they will learn from our experience, thereby making the NEM mainnet a better solution.

### Staging/Preparing Testnet for Mainnet

Our testnet rollouts will be used as a staging platform before we launch the mainnet. We believe that in decentralized technology, it is important that we involve everyone in community in order for us to find issues and bugs before we release the mainnet. By engaging the community in this manner, we are maximizing the chances of a successful platform.

![](index1.png)
<p align="center">Test Network to Stage/Prepare for Main Network</p>

For now, we are limiting the number of testnet nodes so that we can easily release changes if needed. Once we get to a point that we can engage the public, we will invite volunteers to participate.

### Key Updates On The Blockchain

We have made the blockchain consistent with [NXT](https://nxtwiki.org/wiki/Whitepaper:Nxt) and further optimized it by changing a few object (list to deque) usage as follows:

* New PoS Implementation based on NXT.
* Updated the AccountBalance and AccountState.
* Calculation of the Effective Balance by using the ImportanceView.
    * EffectiveBalance calculation was changed based on NXT to return the effective balance for `1440` blocks instead of `1440` + `720` blocks.
* Base targets stored as difficulties in BlockDifficultyCache.
* Modified the calculation of base targets as per [NXT](https://nxtwiki.org/wiki/Whitepaper:Nxt#Base_Target_Value)


### Future Updates
In addition to this staging platform, we have planned a few more major releases in the coming months. This includes the integration of the reputation system, new transaction types (such as super contract/smart contract extensions) and of course, an upstream upgrade from NEM Technology.

Upcoming updates to our testnet are:
* Merge new changes from NEM (`Bison`)
* New Multisignature Transaction Type for ProximaX Reputation System
* Storage Specific Transaction Types
* Streaming Specific Transaction Types
* Super Contract Transaction Types

### To access our Testnet Nodes
The following is our topology diagram for testnet. We currently have 5 nodes, 2 APIs and 3 peer nodes. We will continue to increase these nodes in the near future and engage community volunteers to participate. 

#### Here are the chain heights for each testnet nodes.
**bctestnet1**
`curl http://bctestnet1.xpxsirius.io:3000/chain/height`

**bctestnet2**
`curl http://bctestnet2.xpxsirius.io:3000/chain/height`

### Websocket Ports
`ws://bctestnet1.xpxsirius.io:3000`
`ws://bctestnet2.xpxsirius.io:3000`

PostMan JSON File [Here](https://ipfs.io/ipfs/QmSQB4xoNeADs3kziQoVfheprQZpLJuxcW3hiPhyD82VyG)

## Software Development Kits
We have forked the NEM SDKs and modified it to suit the purpose of ProximaX. For now, we won't be opening the source since we will still need to modify them for new transaction types that we will introduce. However, we will be inviting a few developers to test out the new SDKs. **More details to follow.**

## Tools
We will also be launching tools such as **Blockchain Explorer** and a **Simple Wallet** soon.
