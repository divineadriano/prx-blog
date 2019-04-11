---
title: 'ProximaX Tech January 2019'
media_order: tech-january2019.png
published: true
date: '16-02-2019 06:04'
publish_date: '16-02-2019 06:04'
metadata:
    Keywords: 'ProximaX, ProximaX Sirius, blockchain technology, Blockchain powered, Blockchain protocol, Distributed ledger technology, DLT, dlt, Distributed ledger, Decentralized database, Decentralized database technology, Decentralized storage, Decentralized storage technology, Decentralized supply chain, Decentralized streaming, Integrated and distributed ledger technology, IaDLt, Peer-to-peer technology, Peer to peer streaming, Peer to peer, Consensus mechanism, Consensus protocol, Asymmetric encryption, Data encryption, Off-chain storage, Off-chain streaming, Distributed File Management System, DFMS, Super Contract, Immutability, Data encryption, Encrypted by default, Permissioned, Permission based, Tokenomics, Token economics, Crypto trading, Cryptocurrency, Supply chain, CSD, Central Securities Depository, STO, Security Token Offering, Decentralized supply chain, STO, Private blockchain, DAapps, Decentralized applications, Blockchain apps, Streaming Layer, Streaming Node, Storage Layer, Storage Node, Sharded Information, Sharded Data, Use Case, Use Cases, Blockchain Consensus, Consensus Protocol, Enterprise Solution, Enterprise Solutions, System Integration, Transparency, Immutability, Irreversibility, Traceability, Proof of Bandwidth, Proof of Conflation Aggregate, Proof of Storage, Encryption, Data Security, Data Privacy, Cyber Security, Hackers, Hacking, Nodes, Public Chain, Private Chain, Hybrid Chain, Public & Private Chain, Catapult, SDK, SDKs, Software Development Kits, Super Contract, Super Contracts, Smart Contract, Smart Contracts, Peer-to-Peer , Peer-to-Peer Storage, Software-as-a-Service, SaaS, Lon Wong, PSP, PeerStream, PeerStream Protocol, Anonymous streaming, New Economic Model, New Economic Model Foundation, 482.solutions, Ministry of Community Development UAE, Dragonfly  Fintech, Xarcade, Testnet, Test network, Mainnet, Main network, Tokenomics, Token Economics, XPX, Crypto Currency, Crypto Currencies, Crypto Exchange, Crypto Exchanges, Bitcoin, Zero trust, Escrow, Onchain escrow, Trustless swaps, Trustless, Onion routing, SIM Identity attestation, ProximaX KYC, KYC, Know Your Customer, Know Your Counter Party, Onboarding Customer, Customer Onboarding, Identity Management, Identity Management System, Identity Verification, Identity Authentication, Anti-Money Laundering, AML, RegTech, Regulation Tech, Regulation Technology, GDPR, General Data Protection Regulation, EU GDPR, European Union GDPR, European Union General Data Protection Regulation, Knowyourcustomer, Compliance system, Compliance systems, , ProximaX Suite, Office Suite, Office Collaboration, Workforce Collaboration, Collaboration, Real Time Collaboration, Office suite, word processing, Office collaboration, File sharing, Decentralized file sharing, Real Time Editing, Office Productivity, Productivity, Office Applications, Microsoft Office, Word Processor, Word Processing, Microsoft Word Spreadsheet, Spreadsheets, Excel, Microsoft Excel, Presentation, Presentations, Microsoft Powerpoint, Powerpoint, Keynote, Collabora Office, LibreOffice, Collabora Productivity, Collabora Productivity Ltd,'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talks'
slug: proxima-tech-january-2019
image:
    summary:
        enabled: '1'
        file: tech-january2019.png
    text:
        enabled: '1'
        file: tech-january2019.png
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